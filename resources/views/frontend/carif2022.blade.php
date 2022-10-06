@extends('frontend.index')
@section('judul','Halaman Data 2022')

@section('isi')
<div class="container-fluid mt-2 mb-5">
    <div class="products">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Data Karyawan</span>
                    <div>
                    </div>
                </div>
                <div class="row g-3">
                  @foreach ($f2022 as $fe)
                  <div class="col-md-3 col-sm-6">
                    <div class="white-box">
                      <div class="wishlist-icon">
                        <a href="javascript:void(0);"><img src="https://pngimage.net/wp-content/uploads/2018/06/wishlist-icon-png-3.png" /></a>
                      </div>
                      <div class="product-img">
                      <img class="gambar" src="/image/{{ $fe->image }}" class="card-img-top">
                      </div>
                      <div class="product-bottom">
                        <div <span class="font-weight-bold">{{$fe->nama}}</span></div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fe->nik}}
                        </div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fe->alamat}}
                        </div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fe->jabatan}}
                        </div>
                        <div class="price">
                          <span class="font-weight-bold">{{$fe->gaji}}
                        </div>
                        <a href="/duadua" class="blue-btn">Lihat</a>
                      </div>
                    </div>
                  </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
