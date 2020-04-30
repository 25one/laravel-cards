<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,  //without «,» for end
    Repositories\CardRepository

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, CardRepository $repository)
    {
        $cards = $repository->getData($request);
        return view('front.index', compact('cards')); //['cards' => $cards]
    }
}
