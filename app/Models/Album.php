<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'desc',
    'price',
    'genre_id',
    'image',
    'status',
  ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'genre_id');
    }

    public function songs()
    {
        return $this->hasMany(Song::class,'album_id');
    }
}
