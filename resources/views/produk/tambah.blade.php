@extends('dasbor.index2')
@section('pukri')
    <form action="{{ url('/produksave') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputNama">Nama Produk</label>
                <input type="text" class="form-control" name="namaproduk" id="exampleInpunama1" placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="exampleInputjenis1">Nama Kategori </label>
                <select name="namakategori" id="" class="form-control">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Harga</label>
                <input type="number" class="form-control" name="harga"id="exampleInputjumlah1"
                    placeholder="jumlah produk">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">foto</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="form-control" name="fotoproduk">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputjumlah1">deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="exampleInputdeskripsi1"
                        placeholder="deskripsi">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
    </form>
@endsection
