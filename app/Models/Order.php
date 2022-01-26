<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function event(){
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function OrderTickets(){
        return $this->hasMany(OrderTicket::class, 'order_id');
    }
}
