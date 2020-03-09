<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\EpisodeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EpisodeController extends Controller
{
    public function index()
    {
        $episodes = Episode::all();
        return view('admin.episodes.index', ['episodes' => $episodes]);
    }

    public function create()
    {
        $espisode_categories = EpisodeCategory::all();
        return view('admin.episodes.create', ['episode_categories' => $espisode_categories]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'demo_video' => 'required|string',
            'full_video' => 'required|string',
            'time' => 'required|integer',
            'image' => 'required|string',
            'description' => 'required'
        ]);
        $validated_data['author_id'] = Auth::id();
        $created_episode = Episode::create($validated_data);
        if ($created_episode) {
            $request->session()->flash('success');
            return redirect()->route('episodes.index');
        }
    }

    public function edit(Episode $episode)
    {
        $episode_categories = EpisodeCategory::all();
        return view('admin.episodes.edit', ['episode' => $episode, 'episode_categories' => $episode_categories]);
    }

    public function destroy(Request $request, Episode $episode)
    {
        $destroyed_data = Episode::destroy($episode->id);
        if ($destroyed_data) {
            $request->session()->flash('success');
            return redirect()->route('episodes.index');
        }
    }
}
