@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary py-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('user.store')}}" method="POST">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<div class="container py-5" data-aos="fade-up">
    <div class="section-title">
        <h2>Admin Dashborad</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Asal Sekolah</th>
                    <th>No Telpon</th>
                    <th>Nama Ortu</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no =1;
                @endphp
                @foreach ($users as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tempatLahir}}</td>
                    <td>{{$item->tanggalLahir}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->asalSekolah}}</td>
                    <td>{{$item->noTelp}}</td>
                    <td>{{$item->namaOrtu}}</td>
                    <td>{{$item->gender}}</td>
                    <td>
                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('user.destroy', $item->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection