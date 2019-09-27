<?php

namespace App\Http\Controllers;

use App\Clients;

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
        $clients = $clients = Clients::where('status', 0)
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('home')->with('clients', $clients);
    }


}
