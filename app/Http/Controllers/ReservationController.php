<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request){
        $reservations = Reservation::all();
        return view('barber_shop.reservations',['reservations'=>$reservations]);
    }
}
