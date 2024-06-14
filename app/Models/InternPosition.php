<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InternPosition extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function internDetail(): HasMany
    {
        return $this->hasMany(internDetail::class, 'position_id', 'id');
    }
}
