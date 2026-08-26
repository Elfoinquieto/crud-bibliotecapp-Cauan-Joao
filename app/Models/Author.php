<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AutorFactory> */
    use HasFactory;

    protected $table = "authors";
    protected $fillable = [
        'name',
        'age',
        'nationality',
        'literary_genre',
    ];

    public function books(){
        return $this->hasMany(Book::class, 'author_id');
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
