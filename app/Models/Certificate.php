<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'intake_id',
        'intern_id',
        'certificate_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function intake(): BelongsTo
    {
        return $this->belongsTo(IntakeDetail::class, 'intake_id', 'id');
    }
    public function intern(): BelongsTo
    {
        return $this->belongsTo(InternDetail::class, 'intern_id', 'id');
    }
}
