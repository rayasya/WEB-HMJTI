<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'tb_info';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'gambar_hero',
      'visi',
      'misi',
      'slogan',
      'foto_kahim',
      'foto_wakahim',
      'nama_kahim',
      'nama_wakahim',
      'foto_struktur',
      'tahun',
      'link_proker',
      'link_adart',
    ];
}
