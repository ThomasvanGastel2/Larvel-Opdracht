@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Events</h1>
        <div class="row">
            @foreach($events as $event)
                <div class="card col" style="width: 18rem;">
                    <img class="card-img-top" src="https://picsum.photos/id/18/400/250" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-text">{{$event->description}}.</p>
                        <a href="{{route('events.showBuyTicketForm', $event->id)}}" class="btn btn-primary">Buy tickets now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
