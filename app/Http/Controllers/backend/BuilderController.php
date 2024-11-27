<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Builder;
use Illuminate\Http\Request;


class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Builder::orderBy('id', 'desc')->get();
        return view('backend.builder.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.builder.create');
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


        $builder = new Builder;

        $builder->name = $request->name;

        $builder->email = $request->email;
        $builder->password = bcrypt($request->password);
        $builder->photo = $photo;


        $builder->save();

        return redirect()->route('builder.index')->with('msg', "Successfully builder Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Builder $builder)
    {
        return view('backend.builder.show', compact('builder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Builder $builder)
    {
        return view('backend.builder.edit', compact('builder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Builder $builder)
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
            $photo = $builder->photo;
        }

        $builder->name = $request->name;

        $builder->email = $request->email;
        $builder->password = $builder->password;
        $builder->photo = $photo;


        $builder->update();
        return redirect()->route('builder.index')->with('msg', "Successfully builder Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Builder $builder)
    {
        $builder->delete();
        return redirect()->route('builder.index')->with('msg', 'Deleted Successfully');
    }
}
