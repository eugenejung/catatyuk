<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategoris";
    protected $primaryKey = "id_kategori";
    public $timestamps = false;
    protected $fillable = [
        'nama_kategori',
        'fk_user',
        'jenis_kategori',
        'status_kategori'
    ];
}
