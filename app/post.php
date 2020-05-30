<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'user_id','view','is_publish','content','description','img','type','lien'
    ];

}
