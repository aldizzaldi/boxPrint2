<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword(){
        return $this->password;
    }
}
