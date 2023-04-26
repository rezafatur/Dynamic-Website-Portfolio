<?php

namespace App\Http\Controllers;

use App\Models\ResumeEducation;
use Illuminate\Http\Request;

class ResumeEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumeEducation = ResumeEducation::all();

        return view('resume.education.index', compact('resumeEducation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resume.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'major' => 'required',
            'place' => 'required',
            'year' => 'required'
        ]);

        $input = $request->all();
        ResumeEducation::create($input);

        return redirect('/resume-education')->with('message', 'Data added successfully! Your changes have been saved and applied.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ResumeEducation $resumeEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResumeEducation $resumeEducation)
    {
        return view('resume.education.edit', compact('resumeEducation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResumeEducation $resumeEducation)
    {
        $request->validate([
            'major' => 'required',
            'place' => 'required',
            'year' => 'required'
        ]);

        $input = $request->all();
        $resumeEducation->update($input);

        return redirect('/resume-education')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResumeEducation $resumeEducation)
    {
        $resumeEducation->delete();

        return redirect('/resume-education')->with('message', 'Data deleted successfully! Your changes have been saved and applied.');
    }
}
