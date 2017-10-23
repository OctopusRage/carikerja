<?php

namespace App\Http\Controllers;
use App\Models\User;

class FrontPageController extends Controller
{
    public function index(){
        $users = User::all();
        return view('front')
            ->with('users', $users);
    }

}
