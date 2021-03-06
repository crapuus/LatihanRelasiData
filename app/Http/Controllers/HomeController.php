<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
        $users = User::get();
        return view('home', ['users' => $users]);
    }
    
}
