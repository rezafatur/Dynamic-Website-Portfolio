<?php

namespace App\Http\Controllers;

use App\Models\Others;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $others = Others::first();

        return view('others', compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Others $others)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Others $others)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $others = Others::find($id);

        $request->validate([
            'pagename' => 'required',
            'navbarname' => 'required',
            'copyrightname' => 'required'
        ]);

        $input = $request->all();
        $others->update($input);

        return redirect('/others')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Others $others)
    {
        //
    }
}
