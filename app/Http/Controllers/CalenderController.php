<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudEvents;
use Carbon\Carbon;
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

        return response()->json($formattedEvents);
    }

    public function store(Request $request)
    {
        $event = CrudEvents::create([
            'event_name' => $request->event_name,
            'event_start' => date('Y-m-d H:i:s', strtotime($request->event_start)), // Convert to correct format
            'event_end' => date('Y-m-d H:i:s', strtotime($request->event_end)), // Convert to correct format
        ]);

        // Subtract two days from the end date before saving it to the database
        $event->update([
            'event_end' => Carbon::parse($event->event_end)->subDays(1),
        ]);

        return response()->json($event);
    }

    public function update(Request $request, $id)
    {
        $event = CrudEvents::findOrFail($id);

        $event->update([
            'event_name' => $request->event_name,
            'event_start' => date('Y-m-d H:i:s', strtotime($request->event_start)), // Convert to correct format
            'event_end' => date('Y-m-d H:i:s', strtotime($request->event_end)), // Convert to correct format
        ]);

        // Subtract two days from the end date before saving it to the database
        $event->update([
            'event_end' => Carbon::parse($event->event_end)->subDays(1),
        ]);

        return response()->json($event);
    }

    // The destroy method for deleting events
    public function destroy($id)
    {
        // Find the event in the database based on the provided $id
        $event = CrudEvents::findOrFail($id);

        // Delete the event from the database
        $event->delete();

        // Return the deleted event as a JSON response
        return response()->json($event);
    }
}
