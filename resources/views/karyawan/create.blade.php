@extends('layout.master')
    @section('content')
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KATEGORI</label>
                                <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis') }}" placeholder="Masukkan Jenis">
                            
                                <!-- error message untuk content -->
                                @error('jenis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">HARGA</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga">
                            
                                <!-- error message untuk content -->
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">STOCK</label>
                                <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" placeholder="Masukkan Stock">
                            
                                <!-- error message untuk content -->
                                @error('stock')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL KADALUARSA</label>
                                <input type="date" class="form-control @error('kadaluarsa') is-invalid @enderror" name="kadaluarsa" value="<?php echo strftime('%Y-%m-%d'); ?>">
                                
                                <!-- error message untuk content -->
                                @error('kadaluarsa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    
