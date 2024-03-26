<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpustakaan extends Model
{
    use HasFactory;

    protected $table = 'perpustakaans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'judul_buku',
        'penerbit',
        'jumlah_buku',
    ];
};
  