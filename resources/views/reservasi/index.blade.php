<?php
if (null !== session()->get('message')) {
$msg = session()->get('message');
echo "<script type='text/javascript'>
    alert('$msg');

</script>";
} ?>
@extends('layout.master')
@section('content')
    <form class="form" method="GET" action="/reservasi/detail">
        {{ csrf_field() }}
        <fieldset>
            <legend>Detail reservasi</legend>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Tanggal reservasi</label>
                <input type="datetime-local" class="form-control" id="exampleInputName1" name="tanggal" required>
            </div>
            <button type="submit" class="btn btn-primary mgt">Next</button>
        </fieldset>
    </form>
@endsection
