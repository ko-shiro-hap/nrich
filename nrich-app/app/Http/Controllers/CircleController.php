<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CircleController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('circle.index', ['user'=>$user]);
    }
}