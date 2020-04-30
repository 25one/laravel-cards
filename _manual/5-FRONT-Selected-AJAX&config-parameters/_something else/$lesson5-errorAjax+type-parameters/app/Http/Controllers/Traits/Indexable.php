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
        $cards = $this->repository->getData($request, $this->getParameters($request));

        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".brick-standard", ['cards' => $cards])->render(),
            ]);
        }   

        return view($this->namespace . '.index', compact('cards'));
    }

    /**
     * Get parameters.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    protected function getParameters($request)
    {
        // Default parameters
        $parameters = config("parameters.".$this->namespace);

        // Build parameters with request
        foreach ($parameters as $parameter => &$value) {
            if (isset($request->$parameter)) {
                $value = $request->$parameter;
            }
        }

        return $parameters;
    }        

}