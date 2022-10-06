@extends('backend.home')
@section('judul','Tahun 2022')

@section('isi')
<h2>Ini Halaman Data Tahun 2022</h2>

<a href="/tambah_2022" class="btn btn-success my-2">Tambah Data Tahun 2022</a>

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
    @foreach ($tahun2022 as $tu)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$tu->nama}}</td>
      <td>{{$tu->nik}}</td>
      <td>{{$tu->alamat}}</td>
      <td>{{$tu->jabatan}}</td>
      <td>{{$tu->gaji}}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/duadua/{{ $tu->id }}" method="post">
                 @method('delete')
                 @csrf
                 <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                 <a href="/edit_2022/{{$tu->id}}" class="btn btn-warning">Edit</a>
                 <a href="/lihat_2022/{{$tu->id}}" class="btn btn-success">Lihat</a>
               </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div {{$tahun2022->links()}} </div>
@endsection
