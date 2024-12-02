<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agents = Agent::all();
        return view('frontend.booking', compact('agents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'agent' => 'required',
            'date' => 'required',

            'remarks' => 'max:255 | min:10',

        ]);
        $app = new Booking();
       $app->name = $request->name;
       $app->email = $request->email;
       $app->phone = $request->phone;
       $app->agent_id = $request->agent;
       $app->date = $request->date;

       $app->remarks = $request->remarks;
       $app->save();

       return redirect()->back()->with('msg', "Successfully booking Done");
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
