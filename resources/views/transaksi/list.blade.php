@extends('dasbor.index2')
@section('pukri')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Table Produk</h3>
                    </div>
                    <div class="card-footer">
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama produk</th>
                                    <th>Harga</th>
                                    <th>Quantity</th>
                                    <th>Bukti Bayar</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ Storage::disk('public')->url($item->fotoproduk) }}"
                                            width="150px" height="150px" alt=""></td>
                                    <td>{{ $item->namaproduk }}</td>
                                    <td>Rp.{{ number_format($item->harga) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td><img src="{{ Storage::disk('public')->url($item->BuktiBayar) }}" width="150px"
                                            height="150px" alt=""></td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        @hasrole('user')
                                            <a href="{{ route('upload', ['id' => $item->id]) }}"
                                                class="btn btn-success">Upload Bukti</a>
                                            <a href="" class="btn btn-danger" data-confirm-delete="true">delete</a>
                                        @endhasrole
                                        @hasrole('admin')

                                        @endhasrole
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold" colspan="5">Total Bayar </td>
                                    <td class="text-danger">
                                        @php
                                            $total = $item->harga * $item->quantity;
                                        @endphp
                                        Rp.{{ number_format($total) }}
                                    </td>
                                </tr>
                                @endforeach
                            <tfoot>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama produk</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Bukti Bayar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
@endsection
