<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Image extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = ['title','filename','caption','alt_text','description'];

    protected $hidden = ['user_id', 'post_id', 'page_id'];

    public function User()
    {
        return $this->belongsTo('App\Entities\User');
    }

    public function Post()
    {
        return $this->belongsTo('App\Entities\Post');
    }

    public function Page()
    {
        return $this->belongsTo('App\Entities\Page');
    }

}
