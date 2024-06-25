<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'address1' ,
        'address2',
        'zipcode',
        'city',
       
    ];

    public function films()
    {
        //return $this->belongsToMany(Film::class);
        return $this->belongsToMany(Film::class, 'cinema_film')->withTimestamps();
    }

    public function salles()
    {
        return $this->belongsToMany(Salle::class, 'cinema_salle')->withTimestamps();
    }

    
}
