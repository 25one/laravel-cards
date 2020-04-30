<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,  
    Repositories\AutoRepository,
    Http\Controllers\Traits\Indexable
};

class AutoController extends Controller
{
    use Indexable;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AutoRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'front';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
    public function index(Request $request, AutoRepository $repository)
    {
        $autos = $repository->getData($request);

        return view('front.index', compact('autos'));
    }
    */
}
