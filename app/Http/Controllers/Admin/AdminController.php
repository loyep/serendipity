<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Menu;
use App\Entities\MenuGroup;
use Illuminate\Support\Facades\Auth;

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
        $role_name = request()->user()->roles()->first()->name;
        $menu = \App\Entities\MenuGroup::display($role_name);
//        dd($menu->parent_items->sortBy('order'));
        return view('admin::index');
    }
}
