<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Models\OrderTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class TicketController extends Controller
{
    public function showBuyTicketForm($eventId){
        $event = Event::findorFail($eventId);
        return view('pages.buyTicketForm')
            ->with('event', $event);
    }

    public function orderTicket($eventId, Request $request){
        $event = Event::findOrFail($eventId);
        $customer_id = auth()->user()->customer->id;
        $order_id= null;


        DB::transaction(function () use($customer_id, $eventId, $event, $request, &$order_id){
            $order = new Order();
            $order->customer_id = $customer_id;
            $order->event_id = $eventId;
            $order->order_number = $customer_id. rand(1,10000);
            $order->order_date = Date ('y-m-d');
            $order->status = 'paid';
            $order->save();
            $order_id = $order->id;


            for ($i = 0; $i < $request->amount; $i++){
                $ticket = new Ticket();
                $ticket->status = '0';
                $ticket->price_per_ticket = $event->ticket_price;
                $ticket->save();

                $orderTicket = new OrderTicket();
                $orderTicket->order_id = $order->id;
                $orderTicket->ticket_id = $ticket->id;
                $orderTicket->save();
            }

        });
        return redirect()->route('events.confirmOrder', $order_id);

    }


}


