<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = 'pelatih';

    protected $fillable = [
        'user_id',
        'age',
        'profil_img',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
