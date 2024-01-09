<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';
    protected $primaryKey = 'guest_id';

    protected $fillable = ['guest_id','name','address','email','tel','created_at','updated_at'];

    public function reservations(){
        return $this->hasMany('App\Models\Reservation','guest_id','guest_id');
    }
}
