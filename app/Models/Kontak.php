<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo('app\models\Siswa','id');
    }
    public function Jeniskontak (){
        return $this->hasMany('app\models\Jeniskontak','id');
    }
}
