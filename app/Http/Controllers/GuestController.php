<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(Request $request){
        $guests = Guest::all();
        return view('guests.guests',['guests'=>$guests]);
    }

    public function add(Request $request){
        return view('guests.add');
    }

    public function create(Request $request){
        $this->validate($request,Guest::$rules);
        $guest = new Guest();
        $guest->fill($request->all())->save();
        //今はguestページにリダイレクト
        return redirect('guest');
    }

}