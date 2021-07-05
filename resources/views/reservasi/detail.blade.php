<?php
$email = '';
$nama = '';
$msg = '';
if (null !== session()->get('data')) {
$msg =
"<div class=\"alert alert-dismissible alert-danger\">
    <h5 class=\"alert-heading\">Perhatian!</h5>
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    " .
    session()->get('data') .
    "</div>";
$email = "value=\"" . $data['email'] . "\"";
$nama = "value=\"" . $data['nama'] . "\"";
}
?>
@extends('layout.master')
@section('content')
    <form class="form" method="POST" action="/reservasi/proses">
        {{ csrf_field() }}
        <?php echo $msg; ?>
        <fieldset>
            <legend>Detail reservasi</legend>
            <div class="form-group">
                <label for="readOnlyInput" class="form-label mt-4">Tanggal reservasi</label>
                <input type="datetime-local" class="form-control" id="readOnlyInput" name="tanggal" <?php if
                    (isset($tgl)) { echo 'value="' . $tgl . '"' ; } else { header('Location: /reservasi'); } ?> readonly="" required>
            </div>
            <div class="form-group mgt">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"
                        <?php if (isset($email)) { echo $email; } ?> required>
                    <label for="floatingInput">Alamat email</label>
                </div>
            </div>
            <div class="form-group mgt">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" name="nama" <?php if (isset($nama)) { echo $nama; } ?> required>
                    <label for="floatingInput">Nama lengkap</label>
                </div>
            </div>
            <div class="form-group mgt">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="exampleInputNumber1" placeholder="Jumlah kursi"
                        name="kursi" required>
                    <label for="floatingInput">Jumlah kursi</label>
                    <small id="maksKursi" class="form-text text-muted">Kapasitas <?php echo
                        $data['kapasitas']; ?>, tersisa <?php echo $data['sisa']; ?>.</small>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mgt">Submit</button>
        </fieldset>
    </form>
@endsection
