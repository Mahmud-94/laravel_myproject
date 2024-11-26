<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Expert;
use Illuminate\Http\Request;



class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Agent::orderBy('id', 'desc')->get();
        return view('backend.agent.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $experts = Expert::all();
        return view('backend.agent.create', compact('experts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required | max:100 | min:5',
                'expert'=>'required',
                'email'=>'required | email | max:50 ',
                'password'=>'required | min:8 | confirmed ',
                'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status'=>'required',
            ],

        );

        if ($image = $request->file('photo')) {
            $destinationPath = 'img/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        } else {
            $photo = 'img/nophoto.jpg';
        }


        $agent = new Agent;

        $agent->name = $request->name;
        $agent->expert_id = $request->expert;
        $agent->email = $request->email;
        $agent->password = bcrypt($request->password);
        $agent->photo = $photo;
        $agent->status = $request->status;

        $agent->save();

        return redirect()->route('agent.index')->with('msg', "Successfully Agent Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        return view('backend.agent.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        $experts = Expert::all();
        return view('backend.agent.edit', compact('agent', 'experts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agent $agent)
    {
        $request->validate(
            [
                'name'=>'required | max:100 | min:5',
                'expert'=>'required',
                'email'=>'required | email | max:50 ',
                'photo'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status'=>'required',
            ],

        );

        if ($image = $request->file('photo')) {
            $destinationPath = 'img/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath.$postImage;
        } else {
            $photo = $agent->photo;
        }

        $agent->name = $request->name;
        $agent->expert_id = $request->expert;
        $agent->email = $request->email;
        $agent->password = $agent->password;
        $agent->photo = $photo;
        $agent->status = $request->status;

        $agent->update();
        return redirect()->route('agent.index')->with('msg', "Successfully agent Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agent.index')->with('msg', 'Deleted Successfully');
    }
}
