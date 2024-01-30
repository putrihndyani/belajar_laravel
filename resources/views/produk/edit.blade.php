@extends('dasbor.index2')
@section('pukri')
    @foreach ($produk as $item)
        <form action="{{ url('/produkupdate', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputNama">Nama Produk</label>
                    <input type="text" name="namaproduk" value="{{ $item->namaproduk }}" class="form-control"
                        id="examplenamaproduk1" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <select name="namakategori" id="" class="form-control">
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputjumlah1">Harga</label>
                    <input type="jumlah" name="harga" value="{{ $item->harga }}" class="form-control"
                        id="exampleInputjumlah1" placeholder="harga produk">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">foto</label>
                    <div class="input-group">
                        <img src="{{ Storage::disk('public')->url($item->fotoproduk) }}" style="width: 250px"
                            alt="">
                        <input type="file" class="form-control" name="fotoproduk">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampledeskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" value="{{ $item->deskripsi }}" class="form-control"
                        id="exampledeskripsi1" placeholder="Deskripsi">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Selesai</button>
            </div>
        </form>
    @endforeach
@endsection
