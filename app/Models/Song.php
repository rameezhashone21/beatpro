<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'album_id',
    'title',
    'desc',
    'lyrics',
    'image',
    'price',
    'song_file',
    'status',
  ];

    public function albums()
    {
        return $this->belongsTo(Album::class, 'album_id');
    }

    public function users()
    {
      return $this->belongsToMany(
        User::class,
        'user_songs',
        'song_id',
        'user_id');
      }

}
