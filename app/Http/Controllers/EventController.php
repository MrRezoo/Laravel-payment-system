<?php

namespace App\Http\Controllers;

use App\Event;
use App\Support\Storage\Contracts\StorageInterface;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $events = Event::all();
        return view('events.events', compact('events'));
    }
}
