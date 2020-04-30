<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\CardRepository
     * @var \App\Repositories\AdminRepository     
     */
    protected $repository; //CardRepository or AdminRepository

    /**
     * The namespace
     *
     * @var string
     */
    protected $namespace; //front or back

    /**
     * Display a listing of the records.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //CardController, AdminController
        $cards = $this->repository->getData($request);
        
        //front or back
        return view($this->namespace . '.index', compact('cards'));
    }

}