<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CinemaSalle extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
