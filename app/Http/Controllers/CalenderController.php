<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarEvent;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar');
    }

    public function getEvents()
    {
        $events = CalendarEvent::all();

        $formattedEvents = [];

        foreach ($events as $event) {
            $formattedEvent = [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start,
                'end' => $event->end,
            ];

            $formattedEvents[] = $formattedEvent;
        }

        return response()->json($formattedEvents);
    }

    public function storeEvent(Request $request)
    {
        $event = CalendarEvent::create([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        return response()->json($event);
    }

    public function updateEvent(Request $request, $id)
    {
        $event = CalendarEvent::findOrFail($id);

        $event->update([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
        ]);

        return response()->json($event);
    }

    public function deleteEvent($id)
    {
        $event = CalendarEvent::findOrFail($id);
        $event->delete();

        return response()->json($event);
    }
}
