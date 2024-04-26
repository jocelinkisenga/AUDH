<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Models\Events;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.listevents");
    }

    public function front(){
        return view("event",["events" => Events::latest()->limit(12)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.addevent");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imgName = Carbon::now()->timestamp . 'jocelin.' . $request->file('image')->extension();
        $path = $request->file('image')->storeAs('/storage/uploads', $imgName, 'public');

        Events::create(
[    'title' => $request->title,
            'description' => $request->description,
            'day_event' => $request->day_event,
            'photo' => $imgName]
        );

        return redirect()->route("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        //
    }
}
