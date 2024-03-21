<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    use HasFactory;

    protected $table = 'portals';
    protected $fillable = [
        'uuid',
        'title',
        'description',
        'photo',
        'created_by',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
