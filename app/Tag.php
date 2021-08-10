<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $guarded = [];

    public function post_tags(){
        return $this->hasMany(PostTag::class,'tag_id','id');
    }
}
