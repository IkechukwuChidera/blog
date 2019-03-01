<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      
    protected $fillable=['title','body','user_id'];
    protected $guarded= ['id'];

    public function user(){
        return $this->belongsTo('App\user');
    }
    //
}

