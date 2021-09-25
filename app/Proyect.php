<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    //
    protected $guarded = [];
    protected $table = 'projects';

    public function getRouteKeyName()
    {
        return 'url';
    }
}
