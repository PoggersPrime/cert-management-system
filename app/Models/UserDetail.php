<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'img_id',
        'dob',
        'phone',
        'nationality',
        'occupation',
        'hobbies',
        'experience',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function img(): BelongsToMany
    {
        return $this->belongsToMany(File::class, 'img_id', 'id');
    }
}
