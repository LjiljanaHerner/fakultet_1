<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dvorana extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dvorana';
	
    public function rezervacija()
    {
        return $this->belongsToMany('App\Rezervacija');
    }
}
