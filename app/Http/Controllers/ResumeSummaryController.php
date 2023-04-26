<?php

namespace App\Http\Controllers;

use App\Models\ResumeSummary;
use Illuminate\Http\Request;

class ResumeSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumesummary = ResumeSummary::first();

        return view('resume.summary.index', compact('resumesummary'));
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
    public function show(ResumeSummary $resumeSummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResumeSummary $resumeSummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $resumesummary = ResumeSummary::find($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();
        $resumesummary->update($input);

        return redirect('/resume-summary')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResumeSummary $resumeSummary)
    {
        //
    }
}
