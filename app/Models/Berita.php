<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = [
		'nama', 'gambar', 'narasi', 'keyword', 'kategori_id', 'author', 'created_at'
	];

    public function tagBerita()
    {
      return $this->belongsTo('App\Models\Tag', 'tag_id');
    }
  
    public function kategoriBerita()
    {
      return $this->belongsTo('App\Models\kategoriBerita', 'kategori_id');
    }
    function comments(){
      return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
  }
}