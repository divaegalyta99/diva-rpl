<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeniskontak extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'jenis_kontak'
    ];
    protected$table ='jeniskontak';
    public function kontak(){
        return $this->belongsToMany('app\models\Jeniskontak','id_jenis');
    }
}
