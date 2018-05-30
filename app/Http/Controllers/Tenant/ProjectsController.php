<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function store(Request $request)
    {
        Project::create([
            'name' => $request->name
        ]);

        return back();
    }
}
