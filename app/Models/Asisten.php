<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asisten extends Model
{
    use HasFactory;

    protected $table = 'asisten_pelatih';

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
