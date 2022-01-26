@extends('layouts.base')

@section('content')
    <h2>Buy Tickets {{$event->title}}</h2>
{{--    <form action="" method="post" action="{{'events.orderTicket', $event->id}}">--}}
        @csrf
        <div class="from-group">
            <label for="">Amount</label>
            <input type="number" name="amount" class="form-control">
        </div>

        <input type="submit" value="Afrekenen" class="btn btn-primary">


{{--    </form>--}}
@endsection
