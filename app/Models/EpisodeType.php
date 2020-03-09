<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EpisodeType extends Model
{
    public function episodes()
    {
        return $this->hasMany(Episode::class,'id','type_id');
    }
}
