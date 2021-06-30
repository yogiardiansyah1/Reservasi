@extends('master')
@section('content')    
    <h1>Reservasi sukses</h1>
    @foreach ($detail as $d)
        {{ $d }} <br>
    @endforeach
@endsection
