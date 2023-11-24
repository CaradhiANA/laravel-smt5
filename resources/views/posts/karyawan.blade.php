<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Keripik Tempe Sanan</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
	<div class="container-fluid">
		<div class="row flex-nowrap">
			
			<!--Side Bar-->
			<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
				<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sidebar-header">
					
					<br>	
					<a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white bg-dark text-decoration-none sticky-sm-top align-middle px-5 py-3">
						<span class="fs-5 d-none d-sm-inline fw-bold text-uppercase">DATABASE LARAVEL</span>
					</a>
					<br>
					<hr>
					<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start list-unstyled components" id="menu">
						<li class="nav-item" style="width: 10rem;">
							<a href="/home" class="nav-link align-middle px-4">
								<i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">PENJUALAN</span>
							</a>
						</li>
						<br>
						
						<li class="nav-item" style="width: 10rem;">
							<a href="/pilihBarang" class="nav-link align-middle px-4">
								<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">MASUK PRODUK</span> 
							</a>
						</li>
						<br>
						<li class="nav-item" style="width: 10rem;">
							<a href="/laporan" class="nav-link align-middle px-4">
								<i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">PRODUK</span>
							</a>
						</li>
						<br>
						<li class="nav-item" style="width: 10rem;">
							<a href="/inventory" class="nav-link align-middle px-4">	
								<i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">USER</span> 
							</a>
						</li>
						<br>
						<li class="nav-item" style="width: 10rem;">
							<a href="/karyawan" class="nav-link active align-middle px-4">
								<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">KARYAWAN</span> 
							</a>
						</li>
					</ul>
					
					<hr>
					
					
				</div>
			</div>
			<!--Side Bar End-->
			
			<!--Content-->
			<div class="col py-3">

				<!--Navbar top-->
				<nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-sm-top" style="background-color: #CFD8DC">
					<div class="container">
						<a class="navbar-brand fst-italic" href="{{ url('/home') }}">
							Keripik Tempe Sanan
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<!-- Left Side Of Navbar -->
							<ul class="navbar-nav me-auto">
								
							</ul>

							<!-- Right Side Of Navbar -->
							<ul class="navbar-nav ms-auto">
								<!-- Authentication Links -->
								@guest
									@if (Route::has('login'))
										<li class="nav-item">
											<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										</li>
									@endif

									@if (Route::has('register'))
										<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }}
										</a>

										<div class="dropdown-menu dropdown-menu-end dropdown-menu-dark text-small shadow" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>
								@endguest
							</ul>
						</div>
					</div>
				</nav>
				<!--Navbar top End-->
				<br>

				<!--Main Content-->
				<div class="container">
					<div class="card">
						<div class="card-body">
							<header>
								<h1>Karyawan</h1>
								<nav class="navbar navbar-expand-md navbar-light text-light shadow-sm" style="background-color: #ECEFF1">
									<div class="container-fluid">
										<a class="navbar-brand" href="#"></a>
										<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>
										<div class="collapse navbar-collapse" id="navbarSupportedContent">
											<ul class="navbar-nav me-auto mb-2 mb-lg-0">
												<li class="nav-item">
													<a class="nav-link active" aria-current="page" href="/home">Home</a>
												</li>
											</ul>
										</div>
									</div>
								</nav>
							</header>
							<br/>
							<br/>
							<div class="form-group">

							</div>
							<form action="/karyawan/store" method="post" class="form-inline">
		{{csrf_field()}}
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_karyawan" required="required">
  </div>   </br> 
  <div class="form-group">
    <label for="telpon">Telepon</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="tlpn_karyawan" required="required">
  </div> </br> 
  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="alamat" required="required">
  </div> </br> 
  <label for="gaji">Gaji</label>
  <div class="input-group mb-3" name="gaji_karyawan">
  <div class="input-group-prepend" name="gaji_karyawan">
    <span class="input-group-text">Rp</span>
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest IDR)" name="gaji_karyawan">
  <div class="input-group-append" name="gaji_karyawan">
    <span class="input-group-text">,00</span>
  </div> </br> 
</div> </br> 
  <input type="submit" class="btn btn-success" value="Simpan Data"></button>
</form>
	
 <br>
	<table class="table table-bordered">
		<tr>
			<th>Kode</th>
			<th>Nama Lengkap</th>
			<th>Telepon</th>
			<th>Alamat</th>
      <th>Gaji Karyawan</th>
			<th>Opsi</th>
		</tr>
		
		@foreach($karyawan as $k)
		<tr>
      <td scope="row">{{ $loop->iteration}}</td>
			<td>{{ $k->nama_karyawan }}</td>
			<td>{{ $k->tlpn_karyawan }}</td>
			<td>{{ $k->alamat }}</td>
      <td>{{ $k->gaji_karyawan }}</td>
			<td>
				<a class="btn btn-warning btn-sm" href="/karyawan/edit/{{ $k->kd_karyawan }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/karyawan/hapus/{{ $k->kd_karyawan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
							
							<br/>
							<br/>
							<hr/>
							<footer>
								<p>Kerepek Tempe Sanan 2018 - 2023</p>
							</footer>
						</div>
					</div>
				</div>
				<!--Main Content End-->
			</div>
			<!--Content End-->
		</div>
	</div>
</body>
<html>