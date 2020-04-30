<?php

namespace App\Repositories;

use App\Models\ {
   Joined

};

class AdminRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Create a new AdminRepository instance.
     *
     * @param  \App\Models\Joined $joined
     */
    public function __construct(Joined $joined)
    {
        $this->model = $joined;
    }

    /**
     * Get cards collection.
     *
     * @param  \App\Models\Joined $joined
     */
    public function getData($request, $parameters) //$parameters['order'], $parameters['direction']
    {
        $query = $this->model
           ->select('id', 'user_id', 'card_id', 'number')
           //->where($parameters['wherewho'], 'like', '%' . $parameters['wherewhat'] . '%')
           ->orderBy($parameters['order'], $parameters['direction']);

        //if($request->type) $query->where('type_id', $request->type); 
 
        return $query->get();   
    }    

}
