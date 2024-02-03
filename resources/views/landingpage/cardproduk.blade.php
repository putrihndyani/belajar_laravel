@extends('landingpage.index')
@section('title', 'produk')
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-start">
                @foreach ($produk as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ Storage::disk('public')->url($item->fotoproduk) }}"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <p class="fw-medium text-start">{{ $item->kategori }}</p>
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $item->namaproduk }}</h5>
                                    <!-- Product price-->
                                    Rp. {{ number_format($item->harga) }},-</h5>
                                </div>
                                <p class="fw-normal text">{{ $item->deskripsi }}</p>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="{{ route('order', ['id' => $item->id]) }}"><i class="bi bi-cart-plus"></i>Buy</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
