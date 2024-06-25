<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ReviewFilm extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
