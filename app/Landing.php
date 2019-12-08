<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landing extends Model
{
    protected $table = "landing_gear";
    protected $fillable = ['aircraft_id','serial_no','no_registration'];


    public function aircraft()
    {
    	return $this->belongsTo('App\Aircraft');
    }

    public function total()
    {
    	return $this->hasOne('App\Total');
    }
    
}
