<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Contact::orderBy('id', 'desc')->get();
        return view('backend.contact.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email= $request->email;
        $contact->phone = $request->phone;
        $contact->message= $request->message;
        $contact->save();

        return redirect()->route('contact.index')->with('msg', "Successfully Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('backend.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('backend.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->name = $request->name;
        $contact->email= $request->email;
        $contact->phone = $request->phone;
        $contact->message= $request->message;
        $contact->update();

        return redirect()->route('contact.index')->with('msg', "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
       return redirect()->route('contact.index')->with('msg', 'Deleted Successfully');
    }
}
