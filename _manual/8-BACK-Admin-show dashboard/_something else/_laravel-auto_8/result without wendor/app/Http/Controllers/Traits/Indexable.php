<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\AutoRepository
     * @var \App\Repositories\AdminRepository     
     */
    protected $repository; //AutoRepository or AdminRepository

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
        //AutoController, AdminController
        $autos = $this->repository->getData($request, $this->getParameters());

        //Ajax...
        if ($request->ajax()) {
            return response()->json([
                'table' => view($this->namespace . ".brick-standard", ['autos' => $autos])->render(),
            ]);
        }   
        
        //front or back
        return view($this->namespace . '.index', compact('autos'));
    }

    /**
     * Get parameters.
     *
     * @param  ...
     * @return array
     */
    protected function getParameters()
    {
        // Default parameters
        $parameters = config("parameters.".$this->namespace); //$parameters['order'], $parameters['direction'] 

        return $parameters; 
    }    

}