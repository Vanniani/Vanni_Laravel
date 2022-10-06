@extends('backend.home')
@section('judul','Edit Data Tahun 2020')

@section('isi')

<h1 class="mt-3">Edit Data Tahun 2020 </h1>

    <form method="post" action='/editlaki2020/{{$laki2020->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" value="{{$laki2020->nama}}" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Nik</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="nik" placeholder="Masukan Nik" value="{{$laki2020->nik}}" name="nik">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Alamat</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" value="{{$laki2020->alamat}}" name="alamat">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Jabatan</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="jabatan" placeholder="Masukan Jabatan" value="{{$laki2020->jabatan}}" name="jabatan">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Gaji</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="gaji" placeholder="Masukan Jumlah Gaji" value="{{$laki2020->gaji}}" name="gaji">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="" style="margin-left:15px;">
            <img src="/image/{{ $laki2020->image }}" alt="" width="90" height="90">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" style="margin-left:15px;">Edit</button>
    </form>

@endsection
