<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = 'tb_pengurus';
    protected $primaryKey = 'id_pengurus';
    public $timestamps = false;

    protected $fillable = [
        'nim', 'nama', 'email', 'no_hp', 'foto', 'id_angkatan', 'id_prodi', 'id_golongan', 'id_jabatan', 'id_periode', 'id_jabatan', 'id_biro'
    ];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'id_prodi');
    }
    public function angkatan()
    {
        return $this->belongsTo('App\Models\Angkatan', 'id_angkatan');
    }
    public function golongan()
    {
        return $this->belongsTo('App\Models\Golongan', 'id_golongan');
    }
    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan', 'id_jabatan');
    }
    public function periode()
    {
        return $this->belongsTo('App\Models\Periode', 'id_periode');
    }
    public function biro()
    {
        return $this->belongsTo('App\Models\Biro', 'id_biro');
    }
}
