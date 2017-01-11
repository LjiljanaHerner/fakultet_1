<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultet extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fakultet';
	
    public function rezervacija()
    {
        return $this->belongsToMany('App\Rezervacija');
    }
}
