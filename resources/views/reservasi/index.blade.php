@extends('master')
@section('content')
    <form class="login" method="POST" action="/reservasi/memproses">
        {{ csrf_field() }}
        <input class="inp" type="text" name="nama" placeholder="Nama Lengkap" required>
        <input class="inp" type="text" name="email" placeholder="Email" required>
        <input class="inp" type="number" name="kursi" placeholder="Jumlah Kursi" required>
        <input class="inp" type="datetime-local" name="tanggal" placeholder="Jumlah Kursi" required>
        <input class="btn" type="submit" value="Reservasi">
    </form>
@endsection
