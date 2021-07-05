<?php
if (!isset($_SESSION['id'])) {
return redirect('/resto/login');
}
$keranjang = [];
if (isset($_SESSION['keranjang'])) {
$keranjang = $_SESSION['keranjang'];
}

$msg = '';
if (null !== session()->get('msg')) {
$msg =
"<div class=\"alert alert-dismissible alert-danger\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    " .
    session()->get('msg') .
    "
</div>";
}
?>
@extends('layout.resto')
@section('content')
    <div class="list-group">
        <div class="row">
            <div class="col-lg-8">
                <div class="bg-white p-3">

                    <div class="row">
                        <div class="col-lg-8 h1 pt-2">Daftar Menu</div>

                    </div>
                    <table class="table">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Nama barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Qty</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($menu as $p)
                                <tr class="table-secondary">
                                    <td class="pt-5">{{ $p->id }}</td>
                                    <td class="pt-5">{{ $p->nama }}</td>
                                    <td class="pt-5">{{ $p->harga }}</td>
                                    <td>
                                        <form class="d-flex" method="POST"
                                            action="/resto/pembayaran/tambah/{{ $p->id }}">
                                            {{ csrf_field() }}
                                            <input type="number" class="form-control" style="width:100px ;" id=""
                                                placeholder="Qty" name="qty" required>
                                            <button class="btn btn-primary my-2 my-sm-0" type="submit">+</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white p-3">
                    <div class="row">
                        <div class="h1 pt-2">Keranjang</div>
                        <div class="card border-light mb-3">
                            <ul class="list-group">
                                @foreach ($keranjang as $i)

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-lg-7 pt-3">
                                                    {{ $i['nama'] }}
                                                </div>
                                                <div class="col-lg-5">
                                                    <form class="d-flex" method="POST"
                                                        action="/resto/pembayaran/edit/{{ $i['id'] }}">
                                                        <input type="number" class="form-control" style="width:100px ;"
                                                            id="" placeholder="Qty" value="{{ $i['qty'] }}">
                                                        <button class="btn btn-primary my-2 my-sm-0" type="submit"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-check2"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                                            </svg></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                                <div class="row">
                                                    <div class="col-lg-7">

                                                    </div>
                                                    <div class="col-lg-5">
                                                        Subtotal Rp. {{ $i['harga'] * $i['qty'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <form action="/resto/pembayaran/bayar" method="POST" class="d-flex mb-3">

                                {{ csrf_field() }}
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input name="bayar" type="number" class="form-control"
                                        aria-label="Amount (to the nearest dollar)" required>
                                </div>
                                <div>

                                </div>
                                <button class="btn btn-primary my-2 my-sm-0" type="submit">Bayar</button>
                            </form>
                            <?php echo $msg; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
