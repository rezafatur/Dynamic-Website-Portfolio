<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
use Illuminate\Http\Request;

class PortfolioProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolioProject = PortfolioProject::all();

        return view('portfolio.project.index', compact('portfolioProject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required',
            'link' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        PortfolioProject::create($input);

        return redirect('/portfolio-project')->with('message', 'Data added successfully! Your changes have been saved and applied.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PortfolioProject $portfolioProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortfolioProject $portfolioProject)
    {
        return view('portfolio.project.edit', compact('portfolioProject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortfolioProject $portfolioProject)
    {
        $request->validate([
            'image' => 'image',
            'title' => 'required',
            'link' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $portfolioProject->update($input);

        return redirect('/portfolio-project')->with('message', 'Data edited successfully! Your changes have been saved and applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortfolioProject $portfolioProject)
    {
        $portfolioProject->delete();

        return redirect('/portfolio-project')->with('message', 'Data deleted successfully! Your changes have been saved and applied.');
    }
}
