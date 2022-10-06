@extends('backend.home')
@section('judul','Tambah Data Tahun 2021')

@section('isi')

<h1 class="mt-3">Tambah Data Tahun 2021</h1>

    <form method="post" action='/prosestambahdatatahun20211' enctype="multipart/form-data">
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="type" placeholder="Masukan Nama" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Nik</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="nik" placeholder="Masukan Nik" name="nik">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Alamat</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Jabatan</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="jabatan" placeholder="Masukan Nama Jabatan" name="jabatan">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Gaji</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="gaji" placeholder="Masukan Jumlah Gaji" name="gaji">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection
