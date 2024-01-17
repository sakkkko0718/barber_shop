<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ReservationContent extends Pivot
{
    protected $table = 'reservation_content';

    protected $fillable = ['reservation_id','content_id','price','time'];
}
