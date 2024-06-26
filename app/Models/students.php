<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable=['nis','name','tanggal'];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }
}
