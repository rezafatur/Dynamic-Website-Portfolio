<?php

namespace App\Http\Controllers;

use App\Models\SkillsFrontend;
use Illuminate\Http\Request;

class SkillsFrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillsFrontend = SkillsFrontend::all();

        return view('skills.frontend.index', compact('skillsFrontend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.frontend.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image',
            'title' => 'required',
            'level' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['logo'] = $imageName;
        }

        SkillsFrontend::create($input);

        return redirect('/skills-frontend')->with('message', 'Data added successfully! Your changes have been saved and applied.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillsFrontend $skillsFrontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillsFrontend $skillsFrontend)
    {
        return view('skills.frontend.edit', compact('skillsFrontend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkillsFrontend $skillsFrontend)
    {
        $request->validate([
            'logo' => 'image',
            'title' => 'required',
            'level' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['logo'] = $imageName;
        } else {
            unset($input['logo']);
        }

        $skillsFrontend->update($input);

        return redirect('/skills-frontend')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillsFrontend $skillsFrontend)
    {
        $skillsFrontend->delete();

        return redirect('/skills-frontend')->with('message', 'Data deleted successfully! Your changes have been saved and applied.');
    }
}
