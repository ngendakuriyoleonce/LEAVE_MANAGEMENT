<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Approval extends Model
{
     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function Leave(): BelongsTo
    {
        return $this->belongsTo(Leave::class);
    }
      protected $fillable = [
        'leave_id',
        'approver_id',
        'step',
        'status',
        'comment',
    ];
}
