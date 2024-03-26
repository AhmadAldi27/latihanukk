<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    use HasFactory;
    protected $table = 'peminjams';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'buku_id',
        'tgl_pinjam',
        'tgl_kembali',
        'pengurus',
    ];
};

