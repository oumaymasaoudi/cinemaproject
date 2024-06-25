<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment' ,
        'note' ,
        'date', ];


        public function films()
    {
        
        return $this->belongsToMany(Film::class, 'review_film')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'review_user')->withTimestamps();
    }

}
