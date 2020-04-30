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
            //if(\Auth::user()->role !== 'admin') $query->where('user_id', '=', \Auth::user()->id); //ИЛИ ТАК...
            if(auth()->user()->role !== 'admin') $query->where('user_id', '=', auth()->user()->id); //ИЛИ ТАК... 
            
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

    /**
     * Update card.
     *
     * @param  \App\Models\Joined $card
     * @return void
     */
    public function update($request, $card)
    {
        //$card->update($request->all());
        $card->user_id = $request->user_id;
        $card->card_id = $request->card_id;
        $card->number = $request->number;
        $card->save();
    }     

}
