<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Comment extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['comment','status'];

    protected $hidden = ['user_id', 'post_id'];

    public function User()
    {
        return $this->belongsTo('App\Entities\User');
    }

    public function Post()
    {
        return $this->belongsTo('App\Entities\Post');
    }

}
