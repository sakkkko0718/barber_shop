<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(Request $request){
        $masters = Master::all();
        return view('barber_shop.masters',['masters'=>$masters]);
    }
}
