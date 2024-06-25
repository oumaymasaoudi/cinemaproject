<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SeanceSalle extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
