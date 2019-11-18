<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = "maintenance";
    
    protected $fillable = ['maintenance_name','maintenance_type','implementation',
                            'payment_type','reserve_rate','estimed_cost'];
    
    public $timestamps = false;

    public function aircraft()
    {
    	return $this->belongsToMany('App\Aircraft');
    }
}
