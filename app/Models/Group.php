<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    protected $primaryKey = 'group_id';
    public function member () {
        return $this->hasMany('App\Models\Member', 'group_id', 'group_id');
    }
}
