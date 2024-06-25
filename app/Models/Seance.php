<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory; 
    protected $fillable= [
    'date',
    'hour',

  
    ];

     public function salles()
    {
        
        return $this->belongsToMany(Salle::class, 'seance_salle')->withTimestamps();
    }

    

    }