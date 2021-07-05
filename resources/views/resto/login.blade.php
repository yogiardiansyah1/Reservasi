<?php
$msg = '';
if (null !== session()->get('msg')) {
$msg = session()->get('msg');

$msg = "<div class=\"alert alert-dismissible alert-danger\">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    $msg
</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name', 'Restoran') }}</title>
</head>
<meta charset="UTF-8">

<body>

    <form class="form center" id="login" method="POST" action="/resto/login/cek">
        {{ csrf_field() }}
        <?php echo $msg; ?>
        <div class="form-group">
            <legend class="mgb">Login</legend>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="id" placeholder="id" required>
                <label for="floatingInput">ID</label>
            </div>
            <div class="form-floating mgt">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mgt">Login</button>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
