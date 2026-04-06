<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $appends = ['daily_income'];

    public function getDailyIncomeAttribute()
    {
        $validity = max(1, (int) $this->validity);

        return round((float) $this->commission_with_avg_amount / $validity, 2);
    }
}
