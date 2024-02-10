@extends('layouts.custom')

@section('title', 'Form')

@section('content')
<div class="container py-5" data-aos="fade-up">

    <div class="section-title">
        <h2>Edit Data</h2>
        <div class="card text-start">
            <div class="card-body">
                <div class="section-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                value="{{ old('nama', $user->nama) }}">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempatLahir" class="form-control"
                                    value="{{ old('tempat_lahir', $user->tempatLahir) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggalLahir" class="form-control"
                                    value="{{ old('tanggal_lahir', $user->tanggalLahir) }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control"
                                value="{{ old('alamat', $user->alamat) }}">
                        </div>
                        <div class="mb-3">
                            <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asalSekolah" class="form-control"
                                value="{{ old('asal_sekolah', $user->asalSekolah) }}">
                        </div>
                        <div class="mb-3">
                            <label for="noTelp" class="form-label">No Telepon</label>
                            <input type="text" name="no_telp" id="noTelp" class="form-control"
                                value="{{ old('no_telp', $user->noTelp) }}">
                        </div>
                        <div class="mb-3">
                            <label for="namaOrtu" class="form-label">Nama Orang Tua</label>
                            <input type="text" name="nama_ortu" id="namaOrtu" class="form-control"
                                value="{{ old('nama_ortu', $user->namaOrtu) }}">
                        </div>
                        <div class="mb-3">
                            <label for="gender">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="l" value="L" {{
                                    old('gender', $user->gender)
                                == 'L' ? 'checked' : '' }}>
                                <label class="form-check-label" for="l">L</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="p" value="P" {{
                                    old('gender', $user->gender)
                                == 'P' ? 'checked' : '' }}>
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