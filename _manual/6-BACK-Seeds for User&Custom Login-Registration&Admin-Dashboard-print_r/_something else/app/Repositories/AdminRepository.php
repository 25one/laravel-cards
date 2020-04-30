<?php

namespace App\Repositories;

use App\Models\ {
    Card
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
     * Create a new CardRepository instance.
     *
     * @param  \App\Models\Card $card
     */
    public function __construct(Card $card)
    {
        $this->model = $card;
    }

    /**
     * Create a query for Card.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getData($request, $parameters)
    {
        $query = $this->model
            ->select('id', 'type_id', 'name', 'title');
            //->orderBy('type_id', 'desc');
            //->orderBy($parameters['order'], $parameters['direction'])
            //->whereIn('type_id', $parameters['type']);
            //if($request->type) $query = $query->where('type_id', $request->type); //where('type_id', '=', $request->type) 
        return $query->get();
    }

}
