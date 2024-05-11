<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likeModel extends Model
{
    use HasFactory;

    protected $table = "like"; // Nombre de la tabla

    protected $fillable = [
        'name',
        'link',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class, 'pivote_like', 'like_id', 'user_id');
    }
}
