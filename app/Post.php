<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded =[];

    public function tags(){
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id')
        ->withTimestamps();
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
