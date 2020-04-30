<?php

namespace App\Repositories;

use App\Models\ {
    //Card
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
     * Create a query for Joined.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getData($request, $parameters)
    {
        $query = $this->model
            ->select('id', 'user_id', 'card_id', 'number')
            ->orderBy($parameters['order'], $parameters['direction']);
            
        return $query->get();
    }

    /**
     * Store post.
     *
     * @param  \App\Http\Requests\JoinedRequest $request
     * @return void
     */
    public function store($request)
    {
        Joined::create($request->all());
    }    

}
