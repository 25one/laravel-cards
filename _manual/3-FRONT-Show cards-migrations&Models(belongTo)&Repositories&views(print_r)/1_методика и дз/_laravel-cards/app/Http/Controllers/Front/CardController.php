<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;
use App\ {
    Http\Controllers\Controller,
    Repositories\CardRepository

};    

class CardController extends Controller
{

    /**
     * Create a new controller instance.
     *
    */ 
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CardRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
    }

    /**
     * Show the front-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //public function index(Request $request, CardRepository $repository)
    public function index(Request $request)
    {
        //$cards = $repository->getData($request);
        $cards = $this->repository->getData($request);

        return view('front.index', compact('cards')); //['cards' => $cards]
    }
}
