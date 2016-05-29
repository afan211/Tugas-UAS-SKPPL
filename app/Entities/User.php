<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name', 'email', 'password','first_name','last_name','website'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Comments()
    {
        return $this->hasMany('App\Entities\Comment');
    }

    public function Images()
    {
        return $this->hasMany('App\Entities\Image');
    }

    public function Posts()
    {
        return $this->hasMany('App\Entities\Post');
    }

}
