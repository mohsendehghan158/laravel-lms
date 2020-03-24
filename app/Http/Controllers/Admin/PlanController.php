<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::all();
        return view('admin.plans.index', ['plans' => $plans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plans.create');
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
            'name' => 'required|string',
            'period' => 'required|integer',
            'price' => 'required|integer',
            'count_of_episodes' => 'required|integer'
        ]);
        $created_data = Plan::create($validated_data);
        if ($created_data) {
            $request->session()->flash('success');
            return redirect()->route('plans.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', ['plan' => $plan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $validated_date = $request->validate([
            'name' => 'required|string',
            'period' => 'required|integer',
            'price' => 'required|integer',
            'count_of_episodes' => 'required|integer'
        ]);
        foreach ($validated_date as $key=>$value){
            $plan->$key = $value;
        }
        $updated_data = $plan->update();
        if ($updated_data) {
            $request->session()->flash('success');
            return redirect()->route('plans.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Plan $plan)
    {
        $destroyed_data = Plan::destroy($plan->id);
        if ($destroyed_data) {
            $request->session()->flash('success');
            return redirect()->route('plans.index');
        }
    }
}
