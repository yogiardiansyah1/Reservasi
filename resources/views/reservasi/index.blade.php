<?php
$msg = '';
if (null !== session()->get('msg')) {
$msg =
"<div class=\"alert alert-dismissible alert-danger\">
    <h5 class=\"alert-heading\">Perhatian!</h5>
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    " .
    session()->get('msg') .
    "</div>";
} ?>
@extends('layout.master')
@section('content')
    <form class="form" method="GET" action="/reservasi/detail">
        {{ csrf_field() }}
        <?php echo $msg; ?>
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
