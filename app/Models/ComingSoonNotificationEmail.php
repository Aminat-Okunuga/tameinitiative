<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComingSoonNotificationEmail extends Model
{
    protected $guarded = [];
    public function add(array $attributes){
        $this->create($attributes);
    }
}
