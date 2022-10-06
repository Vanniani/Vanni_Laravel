@extends('backend.home')
@section('judul','Tahun 2021')

@section('isi')
<h2>Ini Halaman Data Tahun 2021</h2>

<a href="/tambah_2021" class="btn btn-success my-2">Tambah Data Tahun 2021</a>

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
    @foreach ($tahun2021 as $ti)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ti->nama}}</td>
      <td>{{$ti->nik}}</td>
      <td>{{$ti->alamat}}</td>
      <td>{{$ti->jabatan}}</td>
      <td>{{$ti->gaji}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/duasatu/{{ $ti->id }}" method="post">
                 @method('delete')
                 @csrf
                 <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                 <a href="/edit_2021/{{$ti->id}}" class="btn btn-warning">Edit</a>
                 <a href="/lihat_2021/{{$ti->id}}" class="btn btn-success">Lihat</a>
               </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div {{$tahun2021->links()}} </div>
@endsection
