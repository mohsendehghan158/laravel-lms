<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\EpisodeCategory;
use App\Models\EpisodeType;
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
        $episode_types = EpisodeType::all();
        $episode_categories = EpisodeCategory::all();
        return view('admin.episodes.create', ['episode_categories' => $episode_categories, 'episode_types' => $episode_types]);
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
            'description' => 'required',
            'type' => 'required|integer'
        ]);
        $validated_data['author_id'] = Auth::id();
        $created_episode = Episode::create($validated_data);
        if ($created_episode) {
            $request->session()->flash('success');
            return redirect()->route('episodes.index');
        }
    }

    public function update(Request $request,Episode $episode)
    {
        $validated_data = $request->validate([
            'title' => 'string',
            'category_id' => 'integer',
            'demo_video' => 'string',
            'full_video' => 'string',
            'time' => 'integer',
            'image' => 'string',
            'description' => 'required',
            'type' => 'integer'
        ]);
        foreach ($request->all() as $key => $value){
            if($value!=0){
                $episode->$key = $value;
            }
        }
        $updated_episode = $episode->update();
        if ($updated_episode) {
            $request->session()->flash('success');
            return redirect()->route('episodes.index');
        }

    }

    public function edit(Episode $episode)
    {
        $episode_types = EpisodeType::all();
        $episode_categories = EpisodeCategory::all();
        return view('admin.episodes.edit', ['episode' => $episode, 'episode_categories' => $episode_categories , 'episode_types' => $episode_types]);
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
