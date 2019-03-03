<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    const PUBLISHED = 1;
    const UNPUBLISHED = 0;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()
    {
        return $this->hasMany('App\ProjectImage');
    }

    public function isPublish()
    {
        if ($this->is_publish) {
            return true;
        }
    }
}
