<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolio';

    protected $fillable = [
        'name',
        'type',
        'date',
        'category',
        'luas',
        'foto',
        'kontraktor',
        'deskripsi',
    ];

    public function fotos(){
        return $this->hasMany(Foto::class);
    }
}
