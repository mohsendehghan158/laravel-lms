<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function show(Episode $episode)
    {
        return view('episode.show', ['episode' => $episode]);
    }

    public function all()
    {
        $episodes = Episode::all();
        return view('episode.all', ['episodes' => $episodes]);
    }
}
