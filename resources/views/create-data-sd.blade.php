@extends('main')

<div  style="padding-bottom: 7%"></div>

<section class="createsd" id="createsd">
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">PPDB SD</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('ppdbsd.buat-data') }}" method="post">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="NISN" type="text"
                                    placeholder="NISN" autofocus required>
                            </div>

                            @error('NISN')
                            <div class="alert alert-danger">
                                NISN Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Nama_Siswa" type="text"
                                    placeholder="Nama Siswa" autofocus required>
                            </div>

                            @error('Nama_Siswa')
                            <div class="alert alert-danger">
                                Nama Siswa Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Umur" type="text"
                                    placeholder="Umur" autofocus required>
                            </div>

                            @error('Umur')
                            <div class="alert alert-danger">
                                Umur Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="NPSN" type="text"
                                    placeholder="NPSN" autofocus required>
                            </div>

                            @error('NPSN')
                            <div class="alert alert-danger">
                                NPSN Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Nama_SD" type="text"
                                    placeholder="Nama Sekolah" autofocus required>
                            </div>

                            @error('Nama_SD')
                            <div class="alert alert-danger">
                                Nama Sekolah Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="Alamat" type="text"
                                    placeholder="Alamat Sekolah" autofocus required>
                            </div>

                            @error('Alamat')
                            <div class="alert alert-danger">
                                Alamat Sekolah Salah
                            </div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <button type="submit" class="btn btn-primary" form="form-login">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>