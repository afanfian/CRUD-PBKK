@extends('main')
<div  style="padding-bottom: 7%"></div>
<section class="ppdbsd" id="ppdbsd">
    <div class="container">
        <center><h3>PPDB SD Sukolilo</h3></center>

        <br/>
        <br/>
        @if (Session::has('tambah_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penambahan ppdbsd Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </button>
            </div>
        @endif

        @if (Session::has('edit_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Pengeditan ppdbsd Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if (Session::has('hapus_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penghapusan ppdbsd Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NPSN</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat Sekolah</th>
                </tr>
            </thead>
            @php
                $it = 1;
            @endphp
            @foreach($data as $d)
            <tr>
                <td>{{ $it }}</td>
                <td>{{ $d->NPSN}}</td>
                <td>{{ $d->Nama }}</td>
                <td>{{ $d->Alamat}}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('ppdbsd.destroy', $d->id) }}" method="POST">
                        
                        <a href="{{ route('ppdbsd.tambah-data') }}" class="btn btn-success shadow" style="font-size: 12px"><i class="fa fa-plus-circle fa-s"></i> Tambah</a>
                        |
                        <a href="{{ Route('ppdbsd.edit', $d->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                        |
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
                        |
                        <a href="{{ route('ppdbsd.show' , $d->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
                    </form>
                </td>
            </tr>
            @php
                $it+=1;
            @endphp
            @endforeach
        </table>
    </div>
</section>