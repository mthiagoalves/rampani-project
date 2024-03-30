<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory;

    use SoftDeletes;


    protected $table = 'posts';

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'categories',
        'published_in',
        'description',
        'meta_description',
        'key_words',
        'is_active'
    ];

    public function setCategoryIdAttribute($value)
    {
        $this->attributes['catetories'] = json_encode($value);
    }

    // Accessor para desserializar o JSON de categorias de volta para um array ao recuperar do banco de dados
    public function getCategoryIdAttribute($value)
    {
        return json_decode($value, true);
    }
}
