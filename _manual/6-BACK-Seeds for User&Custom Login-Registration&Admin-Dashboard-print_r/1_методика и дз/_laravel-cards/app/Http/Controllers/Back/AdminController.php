<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;
use App\ {
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Controllers\Traits\Indexable

};    

class AdminController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
    */ 
    //protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'back';
    }

    /**
     * Show the front-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //public function index(Request $request, CardRepository $repository)
    /*
    public function index(Request $request)
    {
        //$cards = $repository->getData($request);
        $cards = $this->repository->getData($request);

        return view('front.index', compact('cards')); //['cards' => $cards]
    }
    */
}
