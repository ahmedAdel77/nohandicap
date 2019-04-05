<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'this is laravel babaaaaaaaaaaay!!';
        return view('pages.index')->with('title', $title);
    }
}
