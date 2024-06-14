<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IntakeDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'student_id',
        'start_date',
        'end_date',
    ];
    public function course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_id', 'id');
    }
    public function student(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function certificate(): HasOne
    {
        return $this->hasOne(Certificate::class, 'intake_id', 'id');
    }
}
