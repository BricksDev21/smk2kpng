<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primaryKey = 'guru_id';
    protected $fillable = [
		'gambar', 'nama', 'status_id'
	];

  public function status()
  {
    return $this->belongsTo('App\Models\Status', 'status_id');
  }
}
