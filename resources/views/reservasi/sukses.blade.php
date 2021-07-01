@extends('master')
@section('content')    
    <h1>Reservasi sukses</h1>
    @foreach ($detail as $d)
    <?php
    if ($d ==1) {
        echo "Active <br>";
    }else {
        echo " $d <br>";
    }
    ?>
        
    @endforeach
@endsection
