<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EpisodeCategory extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->hasMany(Episode::class,'id','category_id');
    }
}
