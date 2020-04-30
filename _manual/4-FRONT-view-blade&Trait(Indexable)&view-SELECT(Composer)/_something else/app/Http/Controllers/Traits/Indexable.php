<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\CardRepository
     * @var ...     
     */
    protected $repository; //...

    /**
     * The namespace
     *
     * @var string
     */
    protected $namespace; //...

    /**
     * Display a listing of the records.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //CardController, ...
        $cards = $this->repository->getData($request);

        return view($this->namespace . '.index', compact('cards'));
    }

}