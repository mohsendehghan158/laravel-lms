<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $episodes = Episode::all();
        return view('welcome', ['episodes' => $episodes]);
    }
}
