<?php

namespace App\Http\Controllers;

use App\Models\ResumeExperience;
use Illuminate\Http\Request;

class ResumeExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumeExperience = ResumeExperience::all();

        return view('resume.experience.index', compact('resumeExperience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resume.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'experience' => 'required',
            'place' => 'required',
            'year' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();
        ResumeExperience::create($input);

        return redirect('/resume-experience')->with('message', 'Data added successfully! Your changes have been saved and applied.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ResumeExperience $resumeExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResumeExperience $resumeExperience)
    {
        return view('resume.experience.edit', compact('resumeExperience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResumeExperience $resumeExperience)
    {
        $request->validate([
            'experience' => 'required',
            'place' => 'required',
            'year' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();
        $resumeExperience->update($input);

        return redirect('/resume-experience')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResumeExperience $resumeExperience)
    {
        $resumeExperience->delete();

        return redirect('/resume-experience')->with('message', 'Data deleted successfully! Your changes have been saved and applied.');
    }
}
