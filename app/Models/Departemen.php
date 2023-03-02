<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'tb_departemen';
    protected $primaryKey = 'id_departemen';

    public $timestamps = false;

    protected $fillable = [
      'departemen'
    ];

    public function biro()
    {
      return $this->hasMany('App\Models\Biro');
    }
}
