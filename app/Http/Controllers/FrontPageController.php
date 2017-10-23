<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\User;

class FrontPageController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('front')
            ->with('jobs', $jobs);
    }

}
