<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine2 extends Model
{
    protected $table = "engine2";
    
    protected $fillable = ['engine2_id','aircraft_id','engine_name','serial_no','no_registration'];
    
    public function aircraft()
    {
    	return $this->belongsTo('App\Aircraft');
    }

    public function total()
    {
    	return $this->hasOne('App\Total');
    }
}
