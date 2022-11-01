<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Jeniskontak;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_siswa',
        'id_jenis',
        'deskripsi'
    ];
    protected $table = 'kontak';
    public function siswa (){
        return $this->belongsTo(Siswa::class,'id_siswa','id');
    }
    public function Jeniskontak (){
        return $this->hasMany(Jeniskontak::class,'id_jenis','id');
    }
}
