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
        //$this->middleware('admin');
        $this->repository = $repository;
        $this->namespace = 'back';
    }

    /**
     * Create a new view for store.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('back.cards.create'); 
    }

}
