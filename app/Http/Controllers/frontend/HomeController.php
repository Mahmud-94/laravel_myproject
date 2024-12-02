<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Expert;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        $agents = Agent::orderBy('name')->get();

        $experts = Expert::orderBy('name')->limit(5)->get();
        //  dd($agents);
        return view('frontend.home', compact('agents', 'experts'));
    }
}
