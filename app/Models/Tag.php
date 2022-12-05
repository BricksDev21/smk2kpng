<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tag_berita';
    protected $primaryKey = 'tag_id';
    protected $fillable = [
		'tag_name'
  ];
}
