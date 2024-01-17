<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminPanelContent;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $content = AdminPanelContent::first();

        return view('home', compact('content'));
    }
}
