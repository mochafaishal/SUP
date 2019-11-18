<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenancereserve extends Model
{
    protected $table = "maintenance_reserve";
    
    protected $fillable = ['date','aircraft_id'];
    
    public $timestamps = false;

    public function aircraft(){
    	return $this->belongsTo('App\Aircraft');
    }
    public function total()
    {
    	return $this->hasOne('App\Total');
    }
}
