<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ReviewUser extends Pivot
{
    protected $filtable = [
        'availability'
    ];
}
