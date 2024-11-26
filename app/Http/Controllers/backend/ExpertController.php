<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Expert::orderBy('id', 'desc')->get();
        return view('backend.expert.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.expert.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $expert = new Expert;
        $expert->name = $request->expert;
        $expert->details= $request->details;
        $expert->save();

        return redirect()->route('expert.index')->with('msg', "Successfully Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Expert $expert)
    {
        return view('backend.expert.show', compact('expert'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expert $expert)
    {
        return view('backend.expert.edit', compact('expert'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expert $expert)
    {
        $expert->name = $request->expert;
        $expert->details= $request->details;
        $expert->update();

        return redirect()->route('expert.index')->with('msg', "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expert $expert)
    {
        $expert->delete();
       return redirect()->route('expert.index')->with('msg', 'Deleted Successfully');
    }
}
