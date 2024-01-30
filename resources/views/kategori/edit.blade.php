@extends('dasbor.index2')
@section('pukri')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">EDIT KATEGORI BARANG </h3>
                    </div>
                    <!-- /.card-header -->


                    <div class="card-body">

                        @foreach ($kategori as $item)
                            <form action="{{ url('/kategoriupdate', $item->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama kategori</label>
                                    <input type="text" name="namakategori" value="{{ $item->kategori }}"
                                        class="form-control" id="exampleInputEmail1" placeholder="Nama kategori">
                                </div>
                        @endforeach

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                @endsection
