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
