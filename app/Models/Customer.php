<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey= 'customer_id';

    public function setNameAttribute($value) {
        $this->attributes['name'] = ucwords($value);
    }

    public function getDobAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }
}
