<?php
namespace App\Models\Traits;

trait likeable{

                 public function likes()
    {
        return $this->morphMany(Like::class,'likeable');
    }
}