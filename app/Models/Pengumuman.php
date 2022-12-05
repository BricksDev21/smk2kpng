<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    protected $primaryKey = 'pengumuman_id';
    protected $fillable = [
		'nama', 'narasi', 'dokumen', 'gambar', 'kategori_id', 'created_at'
	];
}
