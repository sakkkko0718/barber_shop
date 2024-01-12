<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'reservation_id';

    protected $fillable = ['reservation_id','guest_id','day'];

    public function content(){
        return $this->belongsToMany('App\Models\Content','reservation_content','reservation_id','content_id')
        // ->withPivot('total_price','total_time')
        ;
    }
}
