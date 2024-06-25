<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siege extends Model
{
    use HasFactory;
    protected $fillable = [
        'price' ,
        'type' ,
        'row',
        'status',
    ];


    public function salle()
    {
        
        return $this->belongsToMany(Salle::class, 'siege_salle')->withTimestamps();
    }
}
