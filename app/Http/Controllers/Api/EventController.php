<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\Api\StoreEventRequest;
use App\Http\Resources\EventResource;

class EventController extends Controller
{
    public function index()
    {
        // GET /events - Melihat daftar event
        $events = Event::paginate(10);
        return EventResource::collection($events);
    }

    public function store(StoreEventRequest $request)
    {
        // POST /events - Membuat event

        $event = Event::create($request->validated());
        return response()->json($event, 201);
    }

    public function show($id)
    {
        // GET /events/{id} - Detail event
        $event = Event::findOrFail($id);
        return new EventResource($event);
    }

    public function join(Request $request, $id)
    {
        // POST /events/{id}/join
        $event = Event::findOrFail($id);

        // Mengambil user ID langsung dari objek Request || // POST /events/{id}/join
        $userId = $request->user()->id;

        $event->users()->syncWithoutDetaching([$userId]);

        return response()->json(['message' => 'Successfully joined the event']);
    }
}