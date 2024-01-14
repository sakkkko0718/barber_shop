<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $table = 'reservations';
    protected $primaryKey = 'reservation_id';

    protected $fillable = ['reservation_id','guest_id','day'];

    public function guest(){
        return $this->belongsTo('App\Models\Guest','guest_id','guest_id');
    }

    public function contents(){
        //モデル、中間テーブル、中間テーブル上の相手のモデルの外部キー、中間テーブル上の自分のモデルの外部キー
        return $this->belongsToMany('App\Models\Content', 'reservation_content', 'reservation_id', 'content_id');
    }
}
