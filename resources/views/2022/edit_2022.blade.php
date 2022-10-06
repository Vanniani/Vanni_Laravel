@extends('backend.home')
@section('judul','Edit Data Tahun 2022')

@section('isi')

<h1 class="mt-3">Edit Data Tahun 2022 </h1>

    <form method="post" action='/edit2022/{{$tahun2022->id}}' enctype="multipart/form-data">
            @method('patch')
            @csrf
          <div class="mb-1 col-5">
            <label for="nama" class="form-label">Nama</label>
            <input class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" value="{{$tahun2022->nama}}" name="nama" require>
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Nik</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="nik" placeholder="Masukan Nik" value="{{$tahun2022->nik}}" name="nik">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Alamat</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" value="{{$tahun2022->alamat}}" name="alamat">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Jabatan</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="jabatan" placeholder="Masukan Jabatan" value="{{$tahun2022->jabatan}}" name="jabatan">
          </div>
          <div class="mb-3 col-5">
            <label for="npm" class="form-label">Gaji</label>
            <input class="form-control @error('npm') is-invalid @enderror" id="gaji" placeholder="Masukan Jumlah Gaji" value="{{$tahun2022->gaji}}" name="gaji">
          </div>
          <div class="form-group">
              <label for="image">Pilih Foto</label>
              <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="" style="margin-left:15px;">
            <img src="/image/{{ $tahun2020->image }}" alt="" width="90" height="90">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" style="margin-left:15px;">Edit</button>
    </form>

@endsection
