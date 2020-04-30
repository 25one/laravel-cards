<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joined extends Model {

    public $timestamps = false;

    protected $fillable = [
         'user_id', 'card_id', 'number'
    ];    

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
