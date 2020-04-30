<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model {

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
         'country_id', 'name', 'image'
    ];

    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
