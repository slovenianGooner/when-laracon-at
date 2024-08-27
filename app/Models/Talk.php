<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Talk extends Model
{
    protected $fillable = ['title', 'speaker', 'time', 'day'];

    public function getTimeAttribute(): Carbon
    {
        return new Carbon($this->attributes['time']);
    }
}
