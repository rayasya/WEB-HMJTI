<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biro extends Model
{
    use HasFactory;

    protected $table = 'tb_biro';
    protected $primaryKey = 'id_biro';
    public $timestamps = false;

    protected $fillable = [
      'id_departemen', 'biro'
    ];

    public function departemen()
    {
      return $this->belongsTo('App\Models\Departemen', 'id_departemen');
    }

    public function pengurus()
    {
      return $this->hasMany('App\Models\Pengurus');
    }
}
