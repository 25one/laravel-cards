<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
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
     * @return void
     */
    public function __construct(AdminRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'back';
    }

    /**
     * Create a new view for creating a new auto in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */    
    public function create()
    {
       return view('back.autos.create');
    }

}
