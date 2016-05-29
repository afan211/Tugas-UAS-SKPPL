<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Page extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['title','content','status'];

    protected $hidden = ['page_id'];

    public function Images()
    {
        return $this->hasMany('App\Entities\Image');
    }

    public function Page()
    {
        return $this->belongsTo('App\Entities\Page');
    }

}
