<?php

namespace App\Http\Controllers;



use illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function insertElq()
    {
        // $mahasiswa = new Mahasiswa; // instansiasi class mahasiswa
        // $mahasiswa->npm = '2226250011'; // isi property
        // $mahasiswa->nama_mahasiswa = 'Jennifer Jocelyn';
        // $mahasiswa->tempat_lahir = 'Palembang';
        // $mahasiswa->tanggal_lahir = '2005-01-14'; // date("Y-m-d");
        // $mahasiswa->alamat = 'Jl. Marga';
        // $mahasiswa->save();// menyimpan data ke tabel mahasiswas
        // dump($mahasiswa);// melihat isi $mahasiswa

        //Mass Assigment
        $mhs = Mahasiswa::insert(
            ['nama' => 'Jennifer Jocelyn',
            'npm' => '2226250011',
            'tempat_lahir' => 'Palembang',
            'tanggal_lahir' => '2005-01-14']

        );
        dump($mhs);
    }

    public function updateElq()
    {
        $mahasiswa = Mahasiswa::where('npm','2226250011')->first();
        //tabel mahasiswas berdasarkan npm
        $mahasiswa->nama_mahasiswa = 'Khadijah';
        $mahasiswa->save();
    }

    public function deleteElq()
    {
        $mahasiswa = Mahasiswa::where('npm','2226250011')->first();
        //tabel mahasiswa berdasarkan npm
        $mahasiswa->delete();//hapus data npm 2226250011
        dump($mahasiswa);
    }

    public function SelectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        //dump($allmahasiswa);
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa, 'kampus => $kampus']);
    }

    public function allJoinElq()
    {
        $kampus = 'Universitas Multi Data Palembang';
        $mahasiswas = Mahasiswa::has('prodi')->get();
        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswas, 'kampus' =>$kampus]);
    }
}
