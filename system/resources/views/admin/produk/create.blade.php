@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Produk
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-grup">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">foto</label>
                                        <input type="file" class="form-control" name="foto" accept="jpg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" class="form-control" name="harga">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Berat</label>
                                        <input type="text" class="form-control" name="berat">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control" name="stok">
                                    </div>
                                </div>
                            </div>
                            <div class="form-grup">
                                <label for="" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
@endpush
