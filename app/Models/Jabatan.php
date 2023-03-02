<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'tb_jabatan';
    protected $primaryKey = 'id_jabatan';

    public $timestamps = false;

    protected $fillable = [
        'jabatan',
        //   'periode'
    ];

    public function pengurus()
    {
        return $this->hasMany('App\Models\Pengurus');
    }
}
