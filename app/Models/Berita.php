<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'berita_id';
    protected $fillable = [
		'nama', 'narasi', 'keyword', 'kategori_id', 'author'
	];

    public function tagBerita()
    {
      return $this->belongsTo('App\Models\Tag', 'tag_id');
    }
  
    public function kategoriBerita()
    {
      return $this->belongsTo('App\Models\kategoriBerita', 'kategori_id');
    }
}