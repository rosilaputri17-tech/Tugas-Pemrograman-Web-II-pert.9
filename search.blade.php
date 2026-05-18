@extends('layouts.app')

@section('content')

<h1>
    Hasil Pencarian:
    <span class="text-danger">
        "{{ $keyword }}"
    </span>
</h1>

<hr>

@if(count($hasil) > 0)

<div class="row">

@foreach($hasil as $kategori)

<div class="col-md-4 mb-4">

    <div class="card">

        <div class="card-body">

            <h4 class="text-primary">
                {{ $kategori['nama'] }}
            </h4>

            <p>
                {{ $kategori['deskripsi'] }}
            </p>

            <span class="badge bg-success">
                {{ $kategori['jumlah_buku'] }} Buku
            </span>

        </div>

    </div>

</div>

@endforeach

</div>

@else

<div class="alert alert-danger">

    Data kategori tidak ditemukan

</div>

@endif

@endsection