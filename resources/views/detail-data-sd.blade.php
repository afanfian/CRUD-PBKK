<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Detail Pengumuman</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Detail Pengumuman</h1>
                        <br>
                        @if (Session::has('isi'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('title'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        {{-- <form id="form-login" action="{{ route('artikel.buat-data') }}" method="get"> --}}
                            {{-- @csrf --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="NISN" type="text"
                                        placeholder="NPSN" value="{{ $data->NISN ? $data->NISN : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('NISN')
                            <div class="alert alert-danger">
                                NISN siswa salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Nama_Siswa" type="text"
                                        placeholder="Nama_Siswa" value="{{ $data->Nama_Siswa ? $data->Nama_Siswa : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('Nama_Siswa')
                            <div class="alert alert-danger">
                                Nama siswa salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Umur" type="text"
                                        placeholder="Umur" value="{{ $data->Umur ? $data->Umur : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('Umur')
                            <div class="alert alert-danger">
                                Umur siswa salah
                            </div>
                            @enderror
                            
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="NPSN" type="text"
                                        placeholder="NPSN" value="{{ $data->NPSN ? $data->NPSN : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('NPSN')
                            <div class="alert alert-danger">
                                NPSN sekolah salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Nama_SD" type="text"
                                        placeholder="Nama_SD Sekolah" value="{{ $data->Nama_SD ? $data->Nama_SD : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('Nama_SD')
                            <div class="alert alert-danger">
                                Nama Sekolah Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Alamat" type="text"
                                        placeholder="Alamat Sekolah" value="{{ $data->Alamat ? $data->Alamat : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('Alamat')
                            <div class="alert alert-danger">
                                Alamat Sekolah Salah
                            </div>
                            @enderror
                        {{-- </form> --}}
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
