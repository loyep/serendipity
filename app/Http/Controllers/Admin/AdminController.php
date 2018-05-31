<?php

namespace App\Http\Controllers\Admin;

use App\Facades\Serendipity;

class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Serendipity::js('');
        return view('admin::index');
    }
}
