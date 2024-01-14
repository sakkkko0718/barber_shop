<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Content;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request){
        $reservations = Reservation::all();
        return view('reservations.reservations',['reservations'=>$reservations]);
    }

    //ページの表示
    public function add(Request $request){
        return view('reservations.add');
    }

    public function create(Request $request){
        $cart = new Reservation();
        $cart->fill($request->all())->save();
        return redirect('reservations');
    }
}
