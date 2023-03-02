<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $table = 'tb_periode';
    protected $primaryKey = 'id_periode';
    public $timestamps = false;

    protected $fillable = [
      'periode', 'status'
    ];

    public function jabatan()
    {
      return $this->belongsTo('App\Models\Jabatan', 'id_jabatan');
    }
}
