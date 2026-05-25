<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
     use HasFactory;
     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
     public function Leave(): HasMany
    {
        return $this->hasMany(Leave::class);
    }

      protected $fillable = [
        'employee_id',
        'phone',
        'nationality',
        'department',
        'designation',
        'date_of_joining',
        'user_id',
    ];
}
