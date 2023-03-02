<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;

    protected $table = 'tb_angkatan';
    protected $primaryKey = 'id_angkatan';

    public $timestamps = false;

    protected $fillable = [
      'angkatan'
    ];

    public function prodi()
    {
      return $this->hasMany('App\Models\Prodi');
    }
}
