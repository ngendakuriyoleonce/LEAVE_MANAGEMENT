<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leave extends Model
{
    public function Employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

     public function LeaveType(): BelongsTo
    {
        return $this->belongsTo(LeaveType::class);
    }

    public function approval(): HasMany
    {
        return $this->HasMany(Approval::class);
    }
     protected $fillable = [
        'employee_id',
        'leave_type_id',
        'from_date',
        'to_date',
        'total_days',
        'reason',
        'status',
        'attachment',
    ];

    // Alternative
    // protected $guarded = ['id'];

    protected $casts = [
        'from_date' => 'date',
        'to_date'   => 'date',
    ];
}
