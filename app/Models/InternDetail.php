<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InternDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'intern_id',
        'project_id',
        'position_id',
        'start_time',
        'end_time',
    ];
    public function intern(): BelongsTo
    {
        return $this->belongsTo(User::class, 'intern_id', 'id');
    }
    public function project(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_id', 'id');
    }
    public function internPosition(): BelongsToMany
    {
        return $this->belongsToMany(InternPosition::class, 'position_id', 'id');
    }
    public function certificate(): HasOne
    {
        return $this->hasOne(Certificate::class, 'intake_id', 'id');
    }
}
