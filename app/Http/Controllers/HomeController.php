<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

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
        $clients = Clients::all();
        return view('home')->with('clients', $clients);
    }
    public function getClients(){
        $clients = Clients::all();
        return  PostResource::collection($clients);

    }

}
