<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bachelier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'user_id',
        'filiere',
        'dateNaiss',
        'nomRepresentant',
        'adresse',
        'telephone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
