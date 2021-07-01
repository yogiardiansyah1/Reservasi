<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name', 'Restoran') }}</title>
</head>

<body>
    <div class="header">
        <a href="/home" class="logo">Logo</a>
        <div class="header-right">
            <a href="/penjualan/edit">Manage Menu</a>
            <a href="/reservasi">Manage Reservasi</a>
            <a href="/penjualan/riwayat">Riwayat Penjualan</a>
            <a href="/logout">Logout</a>
        </div>
    </div>
    <div class="main">
        <h1>Product</h1>
        <table>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Nama barang
                </td>
                <td>
                    Harga
                </td>
                <td style="text-align: center">
                    Aksi
                </td>
            </tr>
            @foreach ($menu as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->harga }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="footer">
        <h1>ini footer</h1>
    </div>
</body>

</html>
