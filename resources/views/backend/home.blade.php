<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3>PT Makmur Sejahtera</h3>
            <h5>Data Karyawan</h5>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Karyawan Perempuan</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                  <a href="/duapuluh">Tahun 2020</a>
              </li>
              <li>
                  <a href="/duasatu">Tahun 2021</a>
              </li>
              <li>
                  <a href="/duadua">Tahun 2022</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Karyawan Laki - laki</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                  <a href="/lakilaki2020">Tahun 2020</a>
              </li>
              <li>
                  <a href="/lakilaki2021">Tahun 2021</a>
              </li>
              <li>
                  <a href="/lakilaki2022">Tahun 2022</a>
              </li>
            </ul>
          </li>

          <li>
              <a href="/users"> Users</a>
	          </li>

          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('isi')
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
