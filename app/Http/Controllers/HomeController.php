<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $permission = Permission::orderBy('id','DESC')->paginate(5);
        $users = User::orderBy('id','DESC')->paginate(5);

        //dd($roles);

        return view('home', compact('roles','permission','users'));

    }
}
