<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;
use App\ {
    Http\Controllers\Controller

};    

class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the front-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }
}
