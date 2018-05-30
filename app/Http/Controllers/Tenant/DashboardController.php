<?php

namespace App\Http\Controllers\Tenant;

use App\Company;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('tenants.dashboard',compact('projects'));
    }
}
