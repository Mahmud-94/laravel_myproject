<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Property::orderBy('id', 'desc')->get();
        return view('backend.property.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required | max:100 | min:5',
                'ptype'=>'required',
                'bedroom'=>'required',
                'bathroom'=>'required',
                'balcony'=>'required',
                'kitchen'=>'required',
                'size'=>'required',
                'price'=>'required',
                'location'=>'required',

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


        $property = new Property;

        $property->title = $request->title;
        $property->ptype = $request->ptype;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->balcony = $request->balcony;
        $property->kitchen = $request->kitchen;
        $property->size = $request->size;
        $property->price = $request->price;
        $property->location = $request->location;
        $property->photo = $photo;
        $property->status = $request->status;

        $property->save();

        return redirect()->route('property.index')->with('msg', "Successfully property Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return view('backend.property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('backend.property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $request->validate(
            [
                'title'=>'required | max:100 | min:5',
                'ptype'=>'required',
                'bedroom'=>'required',
                'bathroom'=>'required',
                'balcony'=>'required',
                'kitchen'=>'required',
                'size'=>'required',
                'price'=>'required',
                'location'=>'required',

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
            $photo = $property->photo;
        }

        $property->title = $request->title;
        $property->ptype = $request->ptype;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->balcony = $request->balcony;
        $property->kitchen = $request->kitchen;
        $property->size = $request->size;
        $property->price = $request->price;
        $property->location = $request->location;
        $property->photo = $photo;
        $property->status = $request->status;

        $property->update();
        return redirect()->route('property.index')->with('msg', "Successfully property Updated");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('property.index')->with('msg', 'Deleted Successfully');
    }
}
