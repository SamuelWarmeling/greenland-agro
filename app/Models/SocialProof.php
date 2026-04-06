<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProof extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'photo',
        'message',
        'payout_amount',
        'status',
        'reviewed_at',
        'reviewed_by',
        'review_note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
