<?php 
$status = $detail['status'];
$title = '';
if($status == '1') {
    $status = 'Aktif';
    $title = 'Reservasi Berhasil';
    $desc = 'Berikut adalah detail reservasi anda.';
}
else if($status == '2') {
    $status = 'Selesai';
    $title = 'Reservasi Selesai';
    $desc = 'Reservasi anda telah selesai.';
}
else {
    $status = 'Dibatalkan';
    $title = 'Reservasi Dibatalkan';
    $desc = 'Reservasi anda dibatalkan.';
}
?>
<!DOCTYPE html>
<body>

    <div class="card rsv-card">
        <div class="card-body">
            <h2 class="card-title">{{ $title }}</h2>
            <p class="card-text mgt">{{ $desc }}</p>

            <table class="table rsv-tbl">
                <tbody>
                    <tr class="table-secondary">
                        <th scope="row">ID</th>
                        <td><?php echo $detail['id']; ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Nama</th>
                        <td><?php echo $detail['nama']; ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Jumlah kursi</th>
                        <td><?php echo $detail['kursi']; ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Status</th>
                        <td>{{ $status }}</td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Tanggal</th>
                        <td><?php echo $detail['tanggal']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
