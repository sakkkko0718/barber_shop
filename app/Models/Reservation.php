<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $table = 'reservations';
    protected $primaryKey = 'reservation_id';

    protected $fillable = ['guest_id','day','startTime'];

    public static $rules =array (
        'reservation_id' => 'integer',
        'guest_id' => 'integer',
        'day' => 'required|date',
        'startTime' => 'required',
    );

    public function guest(){
        return $this->belongsTo('App\Models\Guest','guest_id','guest_id');
    }

    public function contents(){
        return $this->belongsToMany('App\Models\Content', 'reservation_content', 'reservation_id', 'content_id')
        ->using('App\Models\ReservationContent')
        ->withPivot('price','time');
    }
}
