<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'img_id',
        'name',
        'description',
    ];
    public function img(): BelongsToMany
    {
        return $this->belongsToMany(File::class, 'img_id', 'id');
    }
    public function intake(): HasMany
    {
        return $this->hasMany(IntakeDetail::class, 'course_id', 'id');
    }
}
