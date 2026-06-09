<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Contact;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('home', [
            'profile' => Profile::first(),
            'skills' => Skill::all(),
            'projects' => Project::all(),
            'experiences' => Experience::all(),
            'contacts' => Contact::where('is_public', true)->get(),
        ]);
    }
}