<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Mengambil 10 data dari seeder
        return view('projects.index', compact('projects'));
    }
}