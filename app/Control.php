<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $fillable = [
        'team_a_name', 'team_b_name', 'team_a_score','team_b_score'
    ];

    protected $guarded=[];
}
