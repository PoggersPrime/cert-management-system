<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'link',
    ];
    public function intern(): HasMany
    {
        return $this->hasMany(InternDetail::class, 'intern_id', 'id');
    }
}
