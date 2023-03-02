<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'tb_form';
    protected $primaryKey = 'id_form';

    public $timestamps = false;

    protected $fillable = [
      'slug', 'judul_form', 'deskripsi', 'Contact_person', 'link_form'
    ];
}
