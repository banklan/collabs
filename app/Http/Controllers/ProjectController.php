<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function getLatest()
    {
        $latests = Project::latest()->limit(4)->get();

        return response()->json($latests, 200);
    }
}
