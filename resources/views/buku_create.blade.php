@extends('layouts.master')

@section('content')

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h3 text-2xl font-semibold mb-4">Formulir Input Buku</h1>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <p class="text-success">{{ session('success') }}</p>
                        @endif

                        <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="judul" class="form-label">Judul:</label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="penulis" class="form-label">Penulis:</label>
                                <input type="text" name="penulis" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for="penerbit" class="form-label">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label for ="deskripsi"class="block text-sm font-medium text-gray-700">sinopsis:</label>
                                <textarea name="deskripsi"class="mt-1 p-2 border border-gray-300 rounded-md"required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="tahun_terbit" class="form-label">tahun terbit:</label>
                                <input type="number" name="tahun_terbit" class="form-control" required>
                            </div>


                            <div class="mb-4">
                                <label for="kategori_id" class="form-label">Kategori:</label>
                                <select name="kategori_id" class="form-control" required>
                                    @foreach($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="foto" class="form-label">foto:</label>
                                <input type="file" name="foto" class="form-control" required>
                            </div>

                           
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection