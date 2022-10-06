@extends('backend.home')
@section('judul','Detail Data Tahun 2020')

@section('isi')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class="mt-3">Halaman Detail Data Karyawan Tahun 2020</h1>

    <div class="card">
    <div class="card-body">
    <div class="" style="">
      <img src="/image/{{ $laki2020->image }}" alt="" width="250" height="200" style="border-radius:10px;">
    </div>
    <h5 class="card-title">Nama: {{ $laki2020->nama }} </h5>
    <h6 class="card-subtitle mb-2 text-muted">Nik: {{ $laki2020->nik }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Alamat: {{ $laki2020->alamat }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Jabatan: {{ $laki2020->jabatan }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Gaji: {{ $laki2020->gaji }}</h6>
    <p class="card-text">Posted: {!! date('d M y', strtotime($laki2020->created_at)) !!}</p>

    <a href="/lakilaki2020" class="btn btn-warning">kembali</a>
  </div>
</div>

    </div>
    </div>
    </div>

@endsection
