<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use App\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Video extends Model
{
//  protected $perPage=1;
  use HasFactory,Likeable;
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
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function getOwnerNameAttribute()
  {
    return $this->user?->name;
  }
  public function getOwnerAvatarAttribute()
  {
    return $this->user?->gravatar;
  }
  public function comments()
  {
    return $this->hasMany(Comments::class)->orderBy('created_at','desc');
  }
  public function getVideoUrlAttribute()
  {
    return '/storage'.$this->url;
  }
  
}
