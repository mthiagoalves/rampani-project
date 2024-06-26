<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaigns extends Model
{
    use HasFactory;

    protected $table = 'campaigns';

    protected $fillable = [
        'name',
        'slug',
        'type',
        'order',
        'is_active'
    ];
}
