@extends('layouts.custom')

@section('title', 'Form')

@section('content')
<div class="container py-5" data-aos="fade-up">

    <div class="section-title">
        <h2>Formulir Pendaftaran</h2>
        <div class="card text-start">
            <div class="card-body">
                <div class="section-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempatLahir" id="tempatLahir" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                            <input type="text" name="asalSekolah" id="asalSekolah" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="noTelp" class="form-label">No Telepon</label>
                            <input type="text" name="noTelp" id="noTelp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="namaOrtu" class="form-label">Nama Orang Tua</label>
                            <input type="text" name="namaOrtu" id="namaOrtu" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="gender">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="l" value="L">
                                <label class="form-check-label" for="l">L</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="p" value="P">
                                <label class="form-check-label" for="p">P</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection