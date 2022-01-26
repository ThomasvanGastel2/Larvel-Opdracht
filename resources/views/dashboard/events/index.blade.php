@extends('layouts.base')

@section('content')
        <div class="container">
            <h1>All events</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>titel</th>
                        <th>adress</th>
                        <th>postcode</th>
                        <th>plaats</th>
                        <th>start datum</th>
                        <th>eind datum</th>
                        <th>beschrijving</th>
                        <th>ticket prijs</th>
                        <th>capaciteit</th>
                    </tr>
                </thead>

                @foreach($events as $event)
                    <tr>
                        <td><a href="{{route('events.show', $event -> id)}}">{{$event -> title}}</a></td>
                        <td>{{$event -> address}}</td>
                        <td>{{$event -> zip}}</td>
                        <td>{{$event -> city}}</td>
                        <td>{{$event -> start_date}}</td>
                        <td>{{$event -> end_date}}</td>
                        <td>{{$event -> description}}</td>
                        <td>{{$event ->ticket_price }}</td>
                        <td>{{$event -> capacity}}</td>
                    </tr>
                @endforeach
            </table>
            <a class="btn btn-primary" href="{{route('events.create')}}" role="button">Create</a>
        </div>


@endsection
