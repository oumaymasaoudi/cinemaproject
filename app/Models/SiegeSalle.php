<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class SiegeSalle extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
