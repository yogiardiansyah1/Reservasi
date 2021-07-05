<!DOCTYPE html>

<head>
    
</head>

<body>

    <div class="card rsv-card">
        <div class="card-body">
            <h2 class="card-title">Reservasi berhasil.</h2>
            <p class="card-text mgt">Berikut adalah detail reservasi anda.</p>

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
                        <th scope="row">Tanggal</th>
                        <td><?php echo $detail['tanggal']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
