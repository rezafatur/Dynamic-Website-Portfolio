<?php

namespace App\Http\Controllers;

use App\Models\SkillsOther;
use Illuminate\Http\Request;

class SkillsOtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillsOther = SkillsOther::all();

        return view('skills.others.index', compact('skillsOther'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.others.create');
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

        SkillsOther::create($input);

        return redirect('/skills-other')->with('message', 'Data added successfully! Your changes have been saved and applied.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillsOther $skillsOther)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillsOther $skillsOther)
    {
        return view('skills.others.edit', compact('skillsOther'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SkillsOther $skillsOther)
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

        $skillsOther->update($input);

        return redirect('/skills-other')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillsOther $skillsOther)
    {
        $skillsOther->delete();

        return redirect('/skills-other')->with('message', 'Data deleted successfully! Your changes have been saved and applied.');
    }
}
