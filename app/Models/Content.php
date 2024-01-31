<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = 'contents';
    protected $primaryKey = 'content_id';

    protected $fillable = ['content_id','master_id','menu','price','time','created_at','updated_at'];

    public function masters(){
        return $this->belongsTo('App\Models\Master','master_id','master_id');
    }
}

