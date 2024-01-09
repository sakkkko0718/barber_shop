<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $table = 'masters';
    protected $primaryKey = 'master_id';

    protected $fillable = ['master_id','type','created_at','updated_at'];

    public function contents(){
        return $this->hasMany('App\Models\Content','content_id','content_id');
    }
}
