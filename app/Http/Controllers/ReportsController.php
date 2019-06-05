<?php

namespace App\Http\Controllers;

use App\Report;
use App\Product;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // check for correct user
        if(auth()->user()->isAdmin !== 1){
            return redirect('/products')->with('error', 'Unauthorized page');

        }

        $reports = Report::all();
        return view('reports.index')->with('reports', $reports);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reason' => 'required',
            'info' => 'nullable'
        ]);



        $report = new Report;

        $report->reason = $request->input('reason');
        $report->info = $request->input('info');
        $report->product_id = $report->product->id;


        $report->save();


        // Report::create(['reason' => $request->reason, 'info' => $request->info, 'product_id' => $product->id]);

        // Report::create($request->all());


        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index')
                         ->with('success', 'Report Deleted');
    }
}
