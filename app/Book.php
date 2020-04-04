<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'author_id',
        'company_id',
        'genre_id',
        'title',
        'year'
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
