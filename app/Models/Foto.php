<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'fotos';

    protected $fillable = [
        'portofolio_id',
        'path',
    ];

    public function portofolio(){
        return $this->belongsTo(Portofolio::class);
    }
}
