@extends('frontend.index')
@section('judul','Halaman Data 2021')

@section('isi')
<div class="container-fluid mt-2 mb-5">
    <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Data Karyawan</span>
                    <div>
                      <form class="" action="/carif2021" method="GET">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend col-3">
                            <button class="btn btn-primary" type="submit">Cari</button>
                          </div>
                          <input type="text" name="keyword" type="search" class="form-control  col-5" placeholder="Cari Data"
                          aria-label="" aria-describedby="basic-addon1">
                        </div>
                      </form>
                    </div>
                </div>
                <div class="row g-3">
                  @foreach ($f2021 as $fi)
                  <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                      <div class="wishlist-icon">
                        <a href="javascript:void(0);"><img src="https://pngimage.net/wp-content/uploads/2018/06/wishlist-icon-png-3.png" /></a>
                      </div>
                      <div class="product-img">
                      <img class="gambar" src="/image/{{ $fi->image }}" class="card-img-top">
                      </div>
                      <div class="product-bottom">
                        <div <span class="font-weight-bold">{{$fi->nama}}</span></div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fi->nik}}
                        </div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fi->alamat}}
                        </div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fi->jabatan}}
                        </div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fi->gaji}}
                        </div>
                        <a href="/duasatu" class="blue-btn">Lihat</a>
                      </div>
                    </div>
                  </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div {{$f2021->links()}} </div>
</div>
@endsection
