<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'tb_komentar';
    protected $primaryKey = 'id_komentar';
    public $timestamps = false;

    protected $fillable = [
      'id_artikel', 'nama', 'email', 'komentar', 'tanggal', 'status'
    ];

    public function posts()
    {
      return $this->belongsTo('App\Models\Artikel');
    }
}
