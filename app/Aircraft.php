<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $table = "aircraft";
    
    protected $fillable = ['asset_name','equipment_type','serial_no',
                            'no_registration','lease_status','lessor','start_date','end_date','updated_at','created_at'];
    
    public function maintenancereserves(){
        return $this->hasMany('App\Maintenancereserve');
    }

    public function engine(){
        return $this->belongsToMany('App\Engine');
    }

    public function maintenance(){
        return $this->belongsToMany('App\Maintenance');
    }

    public function airframe(){
    	return $this->hasOne('App\Airframe');
    }
    public function apu(){
    	return $this->hasOne('App\Apu');
    }
    public function landing(){
    	return $this->hasOne('App\Landing');
    }
    public function engine1(){
    	return $this->hasOne('App\Engine1');
    }
    public function engine2(){
    	return $this->hasOne('App\Engine2');
    }
}
