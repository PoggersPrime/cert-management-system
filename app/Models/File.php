<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
    ];
    public function detail(): HasMany
    {
        return $this->hasMany(UserDetail::class, 'img_id', 'id');
    }
    public function course(): HasMany
    {
        return $this->hasMany(UserDetail::class, 'img_id', 'id');
    }
}
