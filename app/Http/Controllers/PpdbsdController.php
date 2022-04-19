<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ppdbsd;
use App\Models\Siswa;

class PpdbsdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = ppdbsd::all();
        $data = Siswa::all();
        return view('list-data-sd', [
            'data' => $data
            // Data yang di 'data' dipassing dari $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-data-sd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $validatedData = $request->validate([
        //     'NPSN' => 'required|max:255',
        //     'Nama' => 'required',
        //     'Alamat' => 'required',
        // ]);
        // ppdbsd::create($validatedData);
        // return redirect()->route('home')->with('tambah_data', 'Penambahan Data berhasil');

        $ppdbsd = ppdbsd::updateOrCreate([
            'NPSN' => $request['NPSN'],
            'Nama_SD' => $request['Nama_SD'],
            'Alamat'  => $request['Alamat']
        ]);
        Siswa::Create([
            'ppdbsd_id' => $ppdbsd->id,
            'NISN' => $request['NISN'],
            'Nama_Siswa' => $request['Nama_Siswa'],
            'Umur' => $request['Umur']
        ]);
        return redirect()->route('home')->with('tambah_data', 'Penambahan Data PPDB berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Siswa::where('id', $id)->first();
        // $data = siswa::where('id', $id)->first();
        return view('detail-data-sd', [
            'data' => $data
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Siswa::where('id', $id)->first(); //Mengambil data untuk id tersebut dipassing ke edit
        // $data = Siswa::where('id', $id)->first(); //Mengambil data untuk id tersebut dipassing ke edit
        return view('edit-data-sd', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $validatedData = $request->validate([
        //     'NPSN' => 'required|max:255',
        //     'Nama' => 'required',
        //     'Alamat' => 'required',
        // ]);
        // $ppdbsd = ppdbsd::findOrFail($id);
        // $ppdbsd->update($validatedData);
        // return redirect()->route('home')->with('edit_data-sd', 'Pengeditan Data berhasil');
        // Siswa::updateOrCreate([
        //     'NISN' => $request['siswa'],
        //     'Nama' => $request['siswa'],
        //     'Umur' => $request['siswa']
        // ]);
        $siswa = Siswa::findOrFail($id);
        $ppdbsd = ppdbsd::findOrFail($siswa->ppdbsd_id);
        $ppdbsd->update([
            'NPSN' => $request['NPSN'],
            'Nama_SD' => $request['Nama_SD'],
            'Alamat' => $request['Alamat']
        ]);
        $siswa->update([
            'ppdbsd_id' => $ppdbsd->id,
            'NISN' => $request['NISN'],
            'Nama_Siswa' => $request['Nama_Siswa'],
            'Umur' => $request['Umur']
        ]);
        return redirect()->route('home')->with('edit_data-sd', 'Pengeditan Data PPDB berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Siswa::findOrFail($id);
        $data->delete();
        return redirect()->route('home')->with('hapus_data', 'Penghapusan data PPDB berhasil');
    }
}
