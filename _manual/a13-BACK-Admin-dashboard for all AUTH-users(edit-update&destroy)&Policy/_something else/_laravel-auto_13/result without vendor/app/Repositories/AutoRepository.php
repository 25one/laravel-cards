<?php

namespace App\Repositories;

use App\Models\ {
    Auto
};

class AutoRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;


    /**
     * Create a new AutoRepository instance.
     *
     * @param  \App\Models\Auto $auto
     */
    public function __construct(Auto $auto) //...
    {
        $this->model = $auto;
    }

    /**
     * Create a query for Auto.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getData($request, $parameters)
    {
       $query = $this->model
                ->select('id', 'country_id', 'name', 'image')
                ->where('active', 1)
                ->orderBy($parameters['order'], $parameters['direction']);
       if($request->country) $query->where('country_id', $request->country); 

       return $query->get();         
    }

}
