<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat' ,
        'roomnumber',
        'capacity' ,
    ];

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'seance_salle')->withTimestamps();
    
    }


    public function cinemas()
    {
        return $this->belongsToMany(Cinema::class, 'cinema_salle')->withTimestamps();
    
    }

    public function siege()
    {
        return $this->belongsToMany(Siege::class, 'siege_salle')->withTimestamps();
    
       
    }
}
