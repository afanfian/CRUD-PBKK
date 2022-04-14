<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ppdbsd;

class PpdbsdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ppdbsd::all();
        return view('list-data', [
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
        return view('create-data');
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
        $validatedData = $request->validate([
            'NPSN' => 'required|max:255',
            'Nama' => 'required',
            'Alamat' => 'required',
        ]);
        ppdbsd::create($validatedData);
        return redirect()->route('home')->with('tambah_data', 'Penambahan Data berhasil');
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
        $data = ppdbsd::where('id', $id)->first();
        return view('detail-data', [
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
        $data = ppdbsd::where('id', $id)->first(); //Mengambil data untuk id tersebut dipassing ke edit
        return view('edit-data', [
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
        $validatedData = $request->validate([
            'NPSN' => 'required|max:255',
            'Nama' => 'required',
            'Alamat' => 'required',
        ]);
        $ppdbsd = ppdbsd::findOrFail($id);
        $ppdbsd->update($validatedData);
        return redirect()->route('home')->with('edit_data', 'Pengeditan Data berhasil');
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
        $ppdbsd = ppdbsd::findOrFail($id);
        $ppdbsd->delete();
        return redirect()->route('home')->with('hapus_data', 'Penghapusan data berhasil');
    }
}
