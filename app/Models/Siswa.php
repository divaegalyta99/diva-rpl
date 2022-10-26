<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama',
        'alamat',
        'jk',
        'email',
        'foto',
        'about'
    ];
    protected $table = 'siswa';
    public function kontak (){
        return $this->belongsTo('app\models\Kontak','id_siswa');
    }
    public function project (){
        return $this->hasMany('app\models\JProject','id_siswa');
    }
}
