<?php

namespace App\Http\Controllers;

use App\Models\SkillsBackend;
use Illuminate\Http\Request;

class SkillsBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillsBackend = SkillsBackend::all();

        return view('skills.backend.index', compact('skillsBackend'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.backend.create');
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

        SkillsBackend::create($input);

        return redirect('/skills-backend')->with('message', 'Data added successfully! Your changes have been saved and applied.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillsBackend $skillsBackend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillsBackend $skillsBackend)
    {
        return view('skills.backend.edit', compact('skillsBackend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkillsBackend $skillsBackend)
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

        $skillsBackend->update($input);

        return redirect('/skills-backend')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillsBackend $skillsBackend)
    {
        $skillsBackend->delete();

        return redirect('/skills-backend')->with('message', 'Data deleted successfully! Your changes have been saved and applied.');
    }
}
