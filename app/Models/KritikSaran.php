<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;

    protected $table = 'tb_kritiksaran';
    protected $primaryKey = 'id_kritiksaran';

    public $timestamps = false;

    protected $fillable = [
      'nama', 'email', 'kritiksaran', 'tanggal'
    ];
}
