<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

   
}