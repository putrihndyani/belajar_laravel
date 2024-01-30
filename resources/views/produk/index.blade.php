@extends('dasbor.index2')
@section('pukri')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Produk</h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ url('/produktambah') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Nama kategori</th>
                                    <th>Harga</th>
                                    <th>Foto Produk</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namaproduk }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->harga }}</td>
                                        <td><img src="{{ Storage::disk('public')->url($item->fotoproduk) }}" width="150px"
                                                height="150px" alt=""></td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            <div class="card-footer">
                                                <a
                                                    href="{{ url('/produkedit', ['produk' => $item->id]) }}"class="btn btn-primary">edit</a>
                                                <a href="{{ url('/produkdelete', ['produk' => $item->id]) }}"
                                                    class="btn btn-danger"data-confirm-delete="true">delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    @endsection
