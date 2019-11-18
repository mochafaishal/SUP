<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apu extends Model
{
    protected $table = "apu";
    protected $fillable = ['aircraft_id','serial_no','no_registration','created_at','updated_at'];

    public function aircraft()
    {
    	return $this->belongsTo('App\Aircraft');
    }

    public function total()
    {
    	return $this->hasOne('App\Total');
    }
    
}
