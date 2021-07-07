<?php foreach ($data as $d) {
    $n = '19:00';
    $now = date('H:i');
    echo date_format(date_create($d->tanggal), 'H:i') == $n;
}