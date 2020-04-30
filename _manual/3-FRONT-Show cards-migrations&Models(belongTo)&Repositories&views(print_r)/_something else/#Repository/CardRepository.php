<?php

namespace App\Repositories;

use App\Models\ {
    //...
};

class CardRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    //...;


    /**
     * Create a new CardRepository instance.
     *
     * @param  \App\Models\Card $card
     */
    public function __construct() //...
    {
        //...;
    }

    /**
     * Create a query for Card.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getData($request)
    {
       //...
    }

}
