<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ReservationUser extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
