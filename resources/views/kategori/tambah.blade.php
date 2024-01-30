@extends('dasbor.index2')
@section('pukri')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">HALAMAN KATEGORI BARANG </h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ url('/kategorisave') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputNama">Nama Kategori</label>
                                <input type="text" class="form-control" name="namakategori" id="exampleInputNama1"
                                    placeholder="kategori">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                @endsection
