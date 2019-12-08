<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $table = "total_flight";
    protected $fillable = ['maintenancereserve_id','aircraft_id','airframe_id','engine1_id','engine2_id','apu_id','landing_id','fh','fc','tsn','csn','billed_rate','amount_due','billed_rate_fc','amount_due_fc'];

    public function airframe()
    {
    	return $this->belongsTo('App\Airframe');
    }

    public function apu()
    {
    	return $this->belongsTo('App\Apu');
    }
    public function landing()
    {
    	return $this->belongsTo('App\Landing');
    }
    public function engine()
    {
    	return $this->belongsTo('App\Engine');
    }
    public function engine1()
    {
    	return $this->belongsTo('App\Engine');
    }
    public function engine2()
    {
    	return $this->belongsTo('App\Engine');
    }
    public function maintenancereserve()
    {
    	return $this->belongsTo('App\Total');
    }
}
