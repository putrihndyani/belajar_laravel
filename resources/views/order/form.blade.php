@extends('landingpage.index')
@section('title', 'Order Form')
@section('cardproduk')
    <section class="py-5">
        <h1 class="fw-bold text-dark ms-5">Order Form</h1>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="col-12 ">
                <div class="card-body d-flex justify-content-arround">
                    <div class="col-md-6 p-3 d-flex align-items-center">
                        <div class="card p-3">
                            <!-- Product image-->
                            <img class="img-thumbnail w-100" src="{{ asset('assets/dist/img/photo1.png') }}" alt="..." />
                        </div>
                    </div>
                    <!-- Product details-->
                    <div class="col-md-6 p-3">
                        <div class="card card-body">
                            <h-3 class="text-center mb-3 fw-bold">Form Input Order</h-3>
                            <div class="form-group">
                                <label for="" class="fw-bold mb-2">Nama Kategori</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold mb-2">Nama Barang</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold mb-2">Harga</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="" class="fw-bold mb-2">Deskripsi</label>
                                <textarea name="" id="" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="" class="btn btn-danger">Cancel</a>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-dark">Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
