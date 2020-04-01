<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'birth',
        'gender',
        'nationality'
];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
