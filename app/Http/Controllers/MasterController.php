<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index(Request $request){
        $masters = Master::all();
        return view('barder_shop.masters',['masters'=>$masters]);
    }
}
