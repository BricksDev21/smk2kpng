<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $table = 'modul';
    protected $primaryKey = 'modul_id';
    protected $fillable = [
		'nama', 'penulis', 'deskripsi', 'keyword', 'gambar', 'dokumen', 'updated_at'
	];
  
}
