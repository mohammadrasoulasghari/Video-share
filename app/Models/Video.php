<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;


class Video extends Model
{
//  protected $perPage=1;
  use HasFactory;
  protected $fillable = [
    'name', 'url', 'thumnail', 'slug', 'length', 'description', 'category_id'
  ];
  public function getRouteKeyName()
  {
    return 'slug';
  }

  public function getLengthInHumanAttribute()
  {
    return gmdate("i:s", $this->value);
  }
  public function getCreatedAtAttribute($value)
  {
    return (new Verta($value))->formatDifference(\verta());
  }
  public function relatedVideo(int $count = 6)
  {
    return Video::all()->random($count);
  }
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
  public function getCategoryNameAttribute()
  {
    return $this->categori?->name;
  }
}