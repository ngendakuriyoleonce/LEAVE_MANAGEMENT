<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeaveType extends Model
{
    public function Leave(): HasMany
    {
        return $this->hasMany(Leave::class);
    }
     protected $fillable = [
        'name',
        'days_allowed',
        'description',
        'status',
    ];
}
