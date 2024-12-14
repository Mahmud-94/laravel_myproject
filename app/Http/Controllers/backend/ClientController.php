<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Client::orderBy('id', 'desc')->get();
        return view('backend.client.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required | max:100 | min:5',

                'email'=>'required | email | max:50 ',
                'password'=>'required | min:8 | confirmed ',
                'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ],);

        if ($image = $request->file('photo')) {
            $destinationPath = 'img/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        } else {
            $photo = 'img/nophoto.jpg';
        }


        $client = new Client;

        $client->name = $request->name;

        $client->email = $request->email;
        $client->password = bcrypt($request->password);
        $client->photo = $photo;


        $client->save();

        return redirect()->route('client.index')->with('msg', "Successfully client Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('backend.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('backend.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate(
            [
                'name'=>'required | max:100 | min:5',

                'email'=>'required | email | max:50 ',
                'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ],

        );

        if ($image = $request->file('photo')) {
            $destinationPath = 'img/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        } else {
            $photo = $client->photo;
        }

        $client->name = $request->name;

        $client->email = $request->email;
        $client->password = $client->password;
        $client->photo = $photo;


        $client->update();
        return redirect()->route('client.index')->with('msg', "Successfully client Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('msg', 'Deleted Successfully');
    }
}
