<?php

namespace App\Models;

use App\Models\Traits\likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory,likeable; 
    protected $fillable =['body','user_id'];
    public function video()
    {
        return $this->belongsTo(video::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
