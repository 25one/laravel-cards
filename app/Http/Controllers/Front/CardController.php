<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\ {
   Http\Controllers\Controller,
   Repositories\CardRepository,
   Http\Controllers\Traits\Indexable

};

class CardController extends Controller
{
    use Indexable;
    //...

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CardRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'front';
    }

    /**
     * Show front-home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
    public function index(Request $request)
    {
        $cards = $this->repository->getData($request);

        return view('front.index', compact('cards')); //['cards' => $cards]
    }
    */
}
