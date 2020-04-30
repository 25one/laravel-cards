<?php

namespace App\Repositories;

use App\Models\ {
   Card

};

class CardRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Card $card
     */
    public function __construct(Card $card)
    {
        $this->model = $card;
    }

    /**
     * Get cards collection.
     *
     * @param  \App\Models\Card $card
     */
    public function getData($request, $parameters) //$parameters['order'], $parameters['direction']
    {
        $query = $this->model
           ->select('id', 'type_id', 'name', 'title')
           //->where($parameters['where']['who'], 'like', '%' . $parameters['where']['what'] . '%')
           //->orderBy('type_id', 'desc');
           ->orderBy($parameters['orderby']['order'], $parameters['orderby']['direction']);

        if($request->type) $query->where('type_id', $request->type); 
 
        return $query->get();   
    }    

}
