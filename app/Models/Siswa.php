<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
use App\Models\Project;

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
        return $this->hasmany(Kontak::class,'id_siswa','id');
    }
    public function project (){
        return $this->hasmany('App\Models\project','id_siswa');
    }
}
