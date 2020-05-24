<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getAllEvents()
    {
        $events = Event::orderBy('data_hora', 'asc')->get();
        return $events;
    }

    public function event_crear(Request $request)
    {
        $newEvent = new Event;
        $newEvent->titol = $request->input('titol');
        $newEvent->data_hora = $request->input('data_hora');
        $newEvent->save();
        return $newEvent;
    }

    public function event_eliminar($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return 204;
    }

    public function eventoDetalle($id) {
        $eventos =  Event::findOrFail($id);
        return $eventos;
    }
}
