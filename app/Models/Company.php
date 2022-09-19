<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'photo', 'slug', 'users_id', 'industries_id', 'description', 'ceo', 'founded'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'users_id', 'id');
    }

    public function industries()
    {
        return $this->belongsTo(Industry::class, 'industries_id', 'id');
    }
}