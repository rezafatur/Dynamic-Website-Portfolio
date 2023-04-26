<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\PortfolioProject;
use App\Models\ResumeEducation;
use App\Models\ResumeExperience;
use App\Models\ResumeSummary;
use App\Models\SkillsBackend;
use App\Models\SkillsFrontend;
use App\Models\SkillsOther;

class HomeController extends Controller
{
    public function index()
    {
        $header = Header::first();
        $about = About::first();
        $skillsFrontend = SkillsFrontend::all();
        $skillsBackend = SkillsBackend::all();
        $skillsOther = SkillsOther::all();
        $resumesummary = ResumeSummary::first();
        $resumeEducation = ResumeEducation::all();
        $resumeExperience = ResumeExperience::all();
        $portfolioProject = PortfolioProject::all();

        return view('home.index', compact(
            'header',
            'about',
            'skillsFrontend',
            'skillsBackend',
            'skillsOther',
            'resumesummary',
            'resumeEducation',
            'resumeExperience',
            'portfolioProject'
        ));
    }
}
