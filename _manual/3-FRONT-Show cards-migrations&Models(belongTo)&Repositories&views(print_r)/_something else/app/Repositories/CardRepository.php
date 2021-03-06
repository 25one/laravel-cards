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
    public function getData($request)
    {
        $query = $this->model
            ->select('id', 'type_id', 'name', 'title');
            //->orderBy('type_id', 'desc');
        if($request->type) $query = $query->where('type_id', $request->type); //where('type_id', '=', $request->type) 
        return $query->get();
    }

}
