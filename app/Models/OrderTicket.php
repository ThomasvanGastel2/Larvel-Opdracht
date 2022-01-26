<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTicket extends Model
{
    use HasFactory;
    protected  $table = 'order_ticket';
    protected $with = ['ticket'];

    public function ticket(){
        $this->hasOne(Ticket::class, 'id', 'ticket_id');
    }
}
