@extends('backend.home')
@section('judul','Tahun 2020')

@section('isi')
<h2>Ini Halaman Data Tahun 2020</h2>

<a href="/tambah_2020" class="btn btn-success my-2">Tambah Data Tahun 2020</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nik</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Gaji</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tahun2020 as $ta)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ta->nama}}</td>
      <td>{{$ta->nik}}</td>
      <td>{{$ta->alamat}}</td>
      <td>{{$ta->jabatan}}</td>
      <td>{{$ta->gaji}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/duapuluh/{{ $ta->id }}" method="post">
                 @method('delete')
                 @csrf
                 <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                 <a href="/edit_2020/{{$ta->id}}" class="btn btn-warning">Edit</a>
                 <a href="/lihat_2020/{{$ta->id}}" class="btn btn-success">Lihat</a>
               </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div {{$tahun2020->links()}} </div>
@endsection
