<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,  
    Repositories\AdminRepository,
    Http\Controllers\Traits\Indexable,

};

class AdminController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminRepository $adminrepository)
    {
        //$this->middleware('auth');
        //$this->middleware('admin');
        $this->repository = $adminrepository;
        $this->namespace = 'back';
    }

    /**
     * Create a new view for creating a new card in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.cards.create');
    }

}
