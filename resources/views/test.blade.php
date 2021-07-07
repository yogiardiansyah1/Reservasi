<?php
$keranjang = [];
if (isset($_SESSION['keranjang'])) {
$keranjang = $_SESSION['keranjang'];
}

$item = [
'id' => 'm001',
'nama' => 'nama makanan',
];
$arr = ['0' => $item];

$item = [
'id' => 'm002',
'nama' => 'nama minuman',
];
$arr['1'] = $item;
foreach ($arr as $key => $value) {
echo $key . ' => ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($keranjang as $k)

    @endforeach
</body>

</html>
