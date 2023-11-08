<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// jika nama table berbeda
class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswas";

    // untuk mengatur kolom yang boleh di isi saat masi insert
    // protected $fillable = ['npm','nama'];

    // protected $guard = [];

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi');
    }
}
