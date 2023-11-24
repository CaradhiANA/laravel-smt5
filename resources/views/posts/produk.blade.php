<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="app.css">
</head>
<body style="background: aqua">
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <!--Side Bar-->
			<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
				<div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sidebar-header">
					<br>	
					    <h4 class="text-center my-4">DATABASE LARAVEL</h4>  
					</a>
					<br>
					<hr>
					<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start list-unstyled components" id="menu">
						<li class="nav-item" style="width: 10rem;">
							<a href="/home" class="nav-link align-middle px-4">
								<i class="fs-4 bi-house"></i> <span class="text-center my-4">ADMIN</span>
							</a>
						</li>
						<br>
						
						<li class="nav-item" style="width: 10rem;">
							<a href="/pilihBarang" class="nav-link align-middle px-4">
								<i class="fs-4 bi-people"></i> <span class="text-center my-4">PENJUALAN</span> 
							</a>
						</li>
						<br>
						<li class="nav-item" style="width: 10rem;">
							<a href="/laporan" class="nav-link align-middle px-4">
								<i class="fs-4 bi-table"></i> <span class="text-center my-4">MASUK PRODUK</span>
							</a>
						</li>
						<br>
						<li class="nav-item" style="width: 10rem;">
							<a href="/produk" class="nav-link active align-middle px-4">
								<i class="fs-4 bi-speedometer2"></i> <span class="text-center my-4">PRODUK</span> 
							</a>
						</li>
						<br>
						<li class="nav-item" style="width: 10rem;">
							<a href="/welcome" class="nav-link align-middle px-4">
								<i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">USER</span> 
							</a>
						</li>
					</ul>			
					<hr>	
				</div>
			</div>
			<!--Side Bar End-->
            <div class="col py-3">
                <div>
                    <hr>
                    <h3 class="text-center my-4">Data Produk</h3>   
                    <hr>
                    <hr>
                    
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">+ TAMBAH DATA</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">KATEGORI</th>
                                <th scope="col">HARGA</th>
                                <th scope="col">STOCK</th>
                                <th scope="col">TANGGAL KADALUARSA</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->jenis }}</td>
                                    <td>{{ $post->harga }}</td>
                                    <td>{{ $post->stock }}</td>
                                    <td>{{ $post->kadaluarsa }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                        </table>  
                          {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>