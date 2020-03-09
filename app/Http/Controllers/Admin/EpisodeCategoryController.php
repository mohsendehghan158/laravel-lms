<?php

namespace App\Http\Controllers\Admin;

use App\Models\EpisodeCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EpisodeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episode_categroies = EpisodeCategory::all();
        return view('admin.episode-categories.index', ['episode_categories' => $episode_categroies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.episode-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required',
            'image' => 'string|nullable',
            'order' => 'integer|nullable',
            'icon' => 'string|nullable',
        ]);
        $created_data = EpisodeCategory::create($validated_data);
        if ($created_data) {
            $request->session()->flash('success');
            return redirect()->route('episode-categories.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\EpisodeCategory $episodeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(EpisodeCategory $episodeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\EpisodeCategory $episodeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(EpisodeCategory $episodeCategory)
    {
        return view('admin.episode-categories.edit', ['episodeCategory' => $episodeCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\EpisodeCategory $episodeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EpisodeCategory $episodeCategory)
    {
        $episodeCategory->update($request->only(['name','image','icon','order']));
        $request->session()->flash('success');
        return redirect()->route('episode-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param EpisodeCategory $episodeCategory
     * @return void
     */
    public function destroy(Request $request, EpisodeCategory $episodeCategory)
    {
        $destroyed_data = EpisodeCategory::destroy($episodeCategory->id);
        if ($destroyed_data) {
            $request->session()->flash('success');
            return redirect()->route('episode-categories.index');

        }
    }
}
