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
    public function __construct(Auto $auto)
    {
        $this->model= $auto;        
    }

    /**
     * Create a query for Autos.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getData($request)
    {
        $query = $this->model
            ->select('id', 'country_id', 'name', 'image');
            if(isset($request->country)) $query->where('country_id', $request->country);
   
        return $query->get();
    }

}
