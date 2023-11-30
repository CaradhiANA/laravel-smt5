@extends('layout.master')
@section('content')
<div class="col py-3">
    <div>
        <hr>
        <h3 class="text-center my-4">Data Karyawan</h3>
        <hr>
        <hr>

    </div>
    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
        <a href="{{ url('/karyawan/store/')}}" class="btn btn-md btn-success mb-3">+ TAMBAH DATA</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NAMA</th>
                        <th scope="col">TELPON KARYAWAN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">GAJI KARYAWAN</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($karyawans as $post)
                    <tr>
                        <td>{{ $post->nama_karyawan }}</td>
                        <td>{{ $post->tlpn_karyawan }}</td>
                        <td>{{ $post->alamat }}</td>
                        <td>{{ $post->gaji_karyawan }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ url('/karyawan/edit/', $post->id) }}" method="POST">
                                <a href="{{ url('/karyawan/edit/', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
        </div>
    </div>

    @endsection