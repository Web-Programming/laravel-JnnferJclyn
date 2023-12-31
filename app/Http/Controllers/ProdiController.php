<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prodiController extends Controller
{
    //
    public function allJoinFacade(){
        $kampus = "Universitas Multi Data Palembang";
        $result = DB::select('select mahasiswas.*, prodis.nama as nama_prodi from prodis, mahasiswas where prodis.id = mahasiswas.prodi_id');
        return view('prodi.index', ['allmahasiswaprodi' => $result, 'kampus' => $kampus]);
    }

    public function allJoinElq(){
        //$prodis = Prodi::all();
        $prodis = Prodi::with('mahasiswas')->get();
        foreach ($prodis as $prodi){
<<<<<<< HEAD
            echo "<h3>{$prodi->nama}</h3>";
            echo "<hr>Mahasiswa :  ";
            foreach ($prodi->mahasiswas as $mhs){
                echo $mhs->nama . ", ";
=======
            echo "<h3>{$prodi->name}</h3>";
            echo "<hr>Mahasiswa :  ";
            foreach ($prodi->mahasiswas as $mhs){
                echo $mhs->name . ", ";
>>>>>>> ef60bcfd32d8292702b3431af3f951ae788971ac
            }
            echo "<hr>";
        }
    }

    public function create(){
        return view('prodi.create');
    }
    public function store(Request $request){
        // dump($request);
        // echo $request->nama;

        $validateData = $request->validate([
<<<<<<< HEAD
            'nama' => 'required|min:5|max:20',
=======
            'name' => 'required|min:5|max:20',
>>>>>>> ef60bcfd32d8292702b3431af3f951ae788971ac
        ]);
        // dump($validateData);
        // echo $validateData['nama'];

        $prodi = new Prodi(); //buat objek prodi
<<<<<<< HEAD
        $prodi->nama = $validateData['nama']; //simpna nilai input ke properti nama prodi
        $prodi->save();

        //return "Data prodi $prodi->nama berhasil disimpan ke database"; //tampilkan pesan berhasil
        $request->session()->flash('info', "Data prodi $prodi->nama berhasil disimpan ke database");
        return redirect('prodi/create');
=======
        $prodi->name = $validateData['name']; //simpna nilai input ke properti nama prodi
        $prodi->save();

        //return "Data prodi $prodi->nama berhasil disimpan ke database"; //tampilkan pesan berhasil
        session()->flash('info', "Data prodi $prodi->name berhasil disimpan ke database");
        return redirect()->route('prodi.index');
    }

    public function index(){
        $prodis = Prodi::all();
        return view('prodi.index')->with('prodis', $prodis);
    }

    public function show(Prodi $prodi){
        return view('prodi.show', ['prodi' => $prodi]);
    }

    public function edit(Prodi $prodi){
        return view('prodi.edit', ['prodi'=> $prodi]);
    }

    public function update(Request $request, Prodi $prodi){
        $validateData = $request->validate([
            'name'=> 'required|min:5|max:20',
            ]);

            Prodi::where('id', $prodi->id)->update($validateData);
            session()->flash('info',"Data prodi $prodi->name berhasil diubah");
            return redirect()->route('prodi.index');
    }

    public function destroy(Prodi $prodi){
        $prodi->delete();
        return redirect()->route('prodi.index')
        ->with("info","Prodi $prodi->name berhasil dihapus");
>>>>>>> ef60bcfd32d8292702b3431af3f951ae788971ac
    }

}
