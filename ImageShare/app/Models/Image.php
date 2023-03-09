<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'user_id',
        'url',
        'title',
        'name',
        'description'
    ];

    public function author(): BelongsTo
    {
        
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

}
