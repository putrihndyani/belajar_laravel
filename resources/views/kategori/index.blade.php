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
                    <div class="card-footer">
                        <a href="{{ url('/kategoritambah') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama kategori</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <div class="card-footer">
                                                <a
                                                    href="{{ url('/kategoriedit', $item->id) }}"class="btn btn-danger">edit</a>
                                                <a href="{{ url('/kategoridelete', $item->id) }}"
                                                    class="btn btn-primary">delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            <tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    @endsection
