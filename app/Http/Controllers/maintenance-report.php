<?php

namespace App\Http\Controllers;

use App\Maintenancereserve;
use Illuminate\Http\Request;

class MaintenancereportController extends Controller
{
    public function index($id)
    {   
        $maintenancereserve = Maintenancereserve::find($id);
        return view('maintenance-reserve.maintenancereserve_pdf', ['maintenancereserve' => $maintenancereserve]);
    }
}
