@extends('layouts.main')
@section('main-content')
    
    <h1>Dashboard</h1>

    <h3 class="text-center"><p class="text-uppercase">Selamat datang {{ Auth::user()->role }}  </p> <b>{{ Auth::user()->name }}</b></h3>
    

    {{-- @for ($i=0; $i<=10; $i++)
        @if ($i%2)
            <img src="{{ asset('img/Wall1.jpg') }}" alt="" width="300">
        @endif
    @endfor --}}

@endsection