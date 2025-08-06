<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'member_id';
    function Group() {
        // return $this->hasone('App\Models\Group', 'group_id');
        return $this->hasMany('App\Models\Group', 'group_id', 'group_id');
    }
}
