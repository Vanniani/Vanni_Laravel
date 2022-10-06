@extends('backend.home')
@section('judul','Users')

@section('isi')
<h2>Ini Halaman Users</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Created_at</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($users as $us)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$us->name}}</td>
      <td>{{$us->email}}</td>
      <td>{!! date('d M y', strtotime($us->created_at)) !!}</td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <form class="" action="/user/{{ $us->id }}" method="post">
                 @method('delete')
                 @csrf
                 <button type="submit" onclick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger">Hapus</button>
                 <a href="/edituser/{{$us->id}}" class="btn btn-warning">Edit</a>
                 <a href="/lihatuser/{{$us->id}}" class="btn btn-success">Lihat</a>
               </form>
        </div>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection
