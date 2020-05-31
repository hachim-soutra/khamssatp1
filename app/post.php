<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'user_id','view','is_publish','content','description','img','type','lien'
    ];
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

}
