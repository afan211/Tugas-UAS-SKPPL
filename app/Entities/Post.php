<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Post extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['title','content','status'];

    protected $hidden = ['user_id','category_id','tag_id'];

    public function Comments()
    {
        return $this->hasMany('App\Entities\Comment');
    }

    public function Images()
    {
        return $this->hasMany('App\Entities\Image');
    }

    public function User()
    {
        return $this->belongsTo('App\Entities\User');
    }

    public function Category()
    {
        return $this->belongsTo('App\Entities\Category');
    }

    public function Tag()
    {
        return $this->belongsTo('App\Entities\Tag');
    }


}
