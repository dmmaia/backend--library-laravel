<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishingCompany extends Model
{
    protected $fillabel = [
        'name'
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
