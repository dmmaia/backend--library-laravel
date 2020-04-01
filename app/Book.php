<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillabel = [
        'author_id',
        'company_id',
        'title'
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function genres(){
        return $this->belongsTo(Genre::class);
    }

    public function companys(){
        return $this->belongsTo(PublishingCompany::class);
    }
}
