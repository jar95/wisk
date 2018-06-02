<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
