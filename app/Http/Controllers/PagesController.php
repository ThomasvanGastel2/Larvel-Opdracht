<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages/welcome');
    }

    public function dashboard(){
        return view('pages/dashboard');
    }

    public function test(){
        return view('pages/test');
    }

    public function test2(){
        return view('pages/test2');
    }

    public function events(){
        $events = Event::all();
        return view('pages/events')
            ->with(['events' => $events]);
    }

}
