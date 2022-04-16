<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    protected $table = 'pemain';

    protected $fillable = [
        'user_id',
        'age',
        'profil_img',
        'posisi',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
