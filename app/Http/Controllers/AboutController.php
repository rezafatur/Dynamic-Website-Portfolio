<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();

        return view('about', compact('about'));
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
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);

        $request->validate([
            'profile' => 'image',
            'cv' => 'sometimes|file',
            'fullname' => 'required',
            'age' => 'required',
            'degree' => 'required',
            'interest' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'freelance' => 'required',
            'imagefrom' => 'image',
            'from' => 'required',
            'imagecurrently' => 'image',
            'currently' => 'required'
        ]);

        $input = $request->all();

        // Profile
        if ($image = $request->file('profile')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['profile'] = $imageName;
        } else {
            unset($input['profile']);
        }

        // CV
        if ($pdf = $request->file('cv')) {
            $destinationPath = 'data/';
            $pdfName = $pdf->getClientOriginalName();
            $pdf->move($destinationPath, $pdfName);
            $input['cv'] = $pdfName;
        } else {
            unset($input['cv']);
        }

        // Image From
        if ($image = $request->file('imagefrom')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['imagefrom'] = $imageName;
        } else {
            unset($input['imagefrom']);
        }

        // Image Currently
        if ($image = $request->file('imagecurrently')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['imagecurrently'] = $imageName;
        } else {
            unset($input['imagecurrently']);
        }

        $about->update($input);

        return redirect('/about')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        //
    }
}
