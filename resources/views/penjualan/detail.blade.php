@extends('layout.resto')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<div class="list-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white p-3">
                    <div class="row">
                        <div class="col-lg-8 h1 pt-2">Detail Penjualan</div>
                    </div>
                    <table id="detail" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">ID Penjualan</th>
                                <th scope="col">ID Menu</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr class="table-secondary">
                                    <td class="pt-5"> {{$d->id_penjualan }} </td>
                                    <td class="pt-5">{{ $d->id_menu }}</td>
                                    <td class="pt-5">{{ $d->qty }}</td>
                                    <td class="pt-5">{{ $d->harga }}</td>
                                    <td class="pt-5">{{ $d->subtotal }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
        $('#detail').DataTable();
        } );
    </script>
@endsection