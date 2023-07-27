<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents;

class CalenderController extends Controller
{
    public function index()
    {
        $events = CrudEvents::all();
        return view('calender', compact('events'));
    }
    public function getEvents()
    {
        $events = CrudEvents::all();

        $formattedEvents = [];

        foreach ($events as $event) {
            $formattedEvent = [
                'id' => $event->id,
                'title' => $event->event_name,
                'start' => $event->event_start,
                'end' => $event->event_end,
            ];

            $formattedEvents[] = $formattedEvent;
        }

        // dd($formattedEvents); // Add this line to inspect the data

        return response()->json($formattedEvents);
    }

    public function store(Request $request)
    {
        $event = CrudEvents::create([
            'event_name' => $request->event_name,
            'event_start' => $request->event_start,
            'event_end' => $request->event_end,
        ]);

        return response()->json($event);
    }

    public function update(Request $request, $id)
    {
        $event = CrudEvents::findOrFail($id);

        $event->update([
            'event_name' => $request->event_name,
            'event_start' => $request->event_start,
            'event_end' => $request->event_end,
        ]);

        return response()->json($event);
    }

    public function destroy($id)
    {
        $event = CrudEvents::findOrFail($id);
        $event->delete();

        return response()->json($event);
    }
}
