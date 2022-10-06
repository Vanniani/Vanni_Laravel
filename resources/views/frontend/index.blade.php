<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>@yield('judul')</title>

<style>
    @import url('https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800&display=swap');
    .product-list {
        padding: 20px 10px 20px;
        font-family: 'Nunito Sans', sans-serif;
    }
    .product-list>ul {
        margin: 0 -10px;
        padding: 0;
        list-style: none;
        display: flex;
    }
    .product-list>ul>li {
        width: 25%;
        padding: 10px;
    }
    .white-box {
        border-radius: 5px;
        box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.4);
        background-color: #ffffff;
        padding: 35px 20px;
        transition: all 0.5s ease-in-out;
        position: relative;
    }
    .wishlist-icon {
        position: absolute;
        right: 12px;
        top: 10px;
    }
    .wishlist-icon img {
        width: 20px;
        height: 20px;
    }
    .product-img {
        min-height: 135px;
    }
    .product-img img {
        max-width: 100%;
        max-height: 130px;
        display: block;
        margin: 0 auto;
    }
    .product-bottom {
        text-align: center;
    }
    .product-name {
        font-size: 16px;
        color: #666;
        text-align: center;
        margin: 10px 0 10px;
        font-weight: 600;
        max-height: 48px;
        min-height: 48px;
        overflow: hidden;
    }
    .price {
        margin-top: 0;
        font-size: 18px;
        font-weight: 600;
        color: #000000;
        font-family: 'Open Sans', sans-serif;
    }
    .blue-btn {
    	background: #13cfdf;
        border-radius: 5px;
        color: #ffffff;
        font-weight: 700;
        border: none;
        padding: 0 15px;
        cursor: pointer;
        height: 30px;
        line-height: 30px;
        max-width: 132px;
        margin: 10px auto 0;
        display: block;
        text-align: center;
        text-decoration: none;
    }
    .price .line-through {
        font-size: 14px;
        color: #999999;
        font-weight: 400;
        vertical-align: 1px;
        display: inline-block;
        text-decoration: line-through;
        margin-left: 4px;
    }
</style>
  </head>

<body>
  <div class="container">
      <div class="product-list">
        <div class="row">

        </div>
      </div>
  </div>
</body>
<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
        <div class="container-fluid d-flex"> <a class="navbar-brand" href="#">v.ni_store</a>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link" id="home-tab" data-toggle="tab" href="/" role="tab" aria-controls="home" aria-selected="true">Perempuan 2020</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="/f2021" role="tab" aria-controls="profile" aria-selected="false"> Perempuan 2021</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/f2022" role="tab" aria-controls="contact" aria-selected="false"> Perempuan 2022</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/flaki2020" role="tab" aria-controls="contact" aria-selected="false"> Laki-laki 2020</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/flaki2021" role="tab" aria-controls="contact" aria-selected="false"> Laki-laki 2021</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="/flaki2022" role="tab" aria-controls="contact" aria-selected="false"> Laki-laki 2022</a> </li>
            </ul>
        </div>
    </nav>
</div>
@yield('isi')
</html>
