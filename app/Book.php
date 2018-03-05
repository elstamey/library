<?php

namespace Library;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'picture', 'isbn', 'description'];
}
