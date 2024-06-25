<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CinemaFilm extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
