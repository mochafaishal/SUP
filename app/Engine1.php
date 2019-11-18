<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engine1 extends Model
{
    protected $table = "engine1";
    
    protected $fillable = ['engine1_id','aircraft_id','engine_name','serial_no','no_registration','created_at','updated_at'];
    
    public function aircraft()
    {
    	return $this->belongsTo('App\Aircraft');
    }

    public function total()
    {
    	return $this->hasOne('App\Total');
    }
}
