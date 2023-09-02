@extends('layouts.front')
@section('content')

<div class="container px-5 w-75">
    <div class="mx-auto">
        <h1>{{ $data->judul }}</h1>
        <p class="card-text fs-6">{{ $data->tanggalDibuat }}</p>
        <p class="card-text">{{ $data->isi }}</p>
    </div>
    
    <div class="d-flex justify-content-center mt-3">
        @foreach ($produk as $item)
            <div class="card me-3" style="width: 18rem;">
                <img src="{{ asset('storage/'. $item->foto) }}" class="card-img-top w-100 h-75" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->namaProduk }}</h5>
                    <p class="card-text">{{ $item->descProduk }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{ url('beranda') }}" class="btn btn-primary">Kembali</a>
    
</div>

@endsection
