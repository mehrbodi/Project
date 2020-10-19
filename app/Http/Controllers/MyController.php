<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use App\Models\Property;
use App\Models\Phone;
use App\Models\Owner;

class MyController extends Controller
{
    /**
     * first page of the web
     */
    public function index()
    {
        return view('layouts/app');
    }

    /**
     * Show the form for creating a  new resource.
     */
    public function create()
    {
        return view('layouts.add_home');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ValidationRequest $request)
    {
        Owner::create([
            'user_id' => auth()->user()->id,
            "owner" =>$request->has('owner'),
        ]);
        $validation = $request->validated();
        Property::create([
            'house_name_number' => $validation['house_number'],
            'postcode' => $validation['postal_code'],
            'phones' => $validation['phones'],
            'address' => $validation['address'],
            'user_id' => auth()->user()->id,
            'owner_id' => Owner::get()->last()->id,
        ]);



        $type = $request->types;
        Phone::create([
            'number' => $validation['phones'],
            'user_id' => auth()->user()->id,
            'phoneType' => $type,
        ]);
        return redirect('/pages/show_homes');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        $test = Property::all();
        return view('layouts.show_home',compact('test'));
    }

    /**
     * Show the form for editing resource.
     *
     */
    public function edit(Property $post_id)
    {
        $phone = phone::find($post_id->id);
        $prop = Property::find($post_id->id)->owner()->get()->pluck('owner');
        $owner = $prop[0];

        $posts = Property::find($post_id);

        return view('layouts.single_page',compact('posts','owner','phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ValidationRequest $request, Property $home)
    {

        $post_data = Property::find($home->id);
        $post_owner= Owner::find($home->id);

        $validation = $request->validated();

        $post_data->update([
            'house_name_number' => $validation['house_number'],
            'postcode' => $validation['postal_code'],
            'phones' => $validation['phones'],
            'address' => $validation['address'],
            'user_id' => auth()->user()->id,
        ]);
        $post_owner->update([
            "owner" =>$request->has('owner'),
        ]);


        return redirect('/pages/show_homes');
    }

    /**
     * Delete the specified resource in storage.
     *
     */
    public function destroy(Property $del)
    {
        $del->delete();
        return redirect('/pages/show_homes');
    }

}    
