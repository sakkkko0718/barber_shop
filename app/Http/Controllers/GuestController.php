<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request){
        $guests = Guest::all();
        return view('barber_shop.guests',['guests'=>$guests]);
    }
}