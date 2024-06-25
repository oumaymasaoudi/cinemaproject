<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'title' ,
        'category' ,
        'director',
        'duration',
    ];

    public function cinemas()
    {
        return $this->belongsToMany(Cinema::class, 'cinema_film')->withTimestamps();
    
        //return $this->belongsToMany(Cinema::class)->withTimestamps();
    }

}
