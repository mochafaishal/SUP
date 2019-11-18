<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenanceaircraft extends Model
{
    protected $table = "aircraft_maintenance";
    
    protected $fillable = ['aircraft_id', 'maintenance_id'];
    
    public $timestamps = false;

 
}
