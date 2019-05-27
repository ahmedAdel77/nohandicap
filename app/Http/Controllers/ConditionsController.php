<?php

namespace App\Http\Controllers;

use App\Condition;
use Illuminate\Http\Request;
use App\Product;

class ConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $conditions = Condition::all();
        return view('conditions.index')->with('conditions', $conditions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('conditions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        Condition::create($request->all());

        return redirect()->route('conditions.index')
                         ->with('success', 'Condition Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition)
    {
        //
        return view('conditions.show', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function edit(Condition $condition)
    {
        //
        return view('conditions.edit', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $condition->update($request->all());

        return redirect()->route('conditions.index')
                         ->with('success', 'Condition Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition)
    {
        //
        $condition->delete();

        return redirect()->route('conditions.index')
                         ->with('success', 'Condition Deleted');
    }
}
