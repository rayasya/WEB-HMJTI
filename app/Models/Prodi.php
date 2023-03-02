<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'tb_prodi';
    protected $primaryKey = 'id_prodi';
    public $timestamps = false;

    protected $fillable = [
      'prodi', 'id_golongan', 'id_angkatan'
    ];

    public function golongan()
    {
      return $this->belongsTo('App\Models\Golongan', 'id_golongan');
    }
    public function angkatan()
    {
      return $this->belongsTo('App\Models\Angkatan', 'id_angkatan');
    }
    public function pengurus()
    {
      return $this->hasMany('App\Models\Pengurus');
    }
}
