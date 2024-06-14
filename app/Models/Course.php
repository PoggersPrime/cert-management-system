<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'img_id',
        'name',
        'description',
    ];
    public function img(): BelongsTo
    {
        return $this->belongsTo(File::class, 'img_id', 'id');
    }
}
