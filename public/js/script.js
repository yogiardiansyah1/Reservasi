function menu(){
    document.getElementById('fooddrink').innerHTML = halamanMenu();
}

function edit(){
    document.getElementById('fooddrink').innerHTML = halamanEdit();
}

function reservasi(){
    document.getElementById('fooddrink').innerHTML = halamanReservasi();
}
function riwayat(){
    document.getElementById('fooddrink').innerHTML = halamanRiwayat();
}

function halamanMenu(){
    return `
            
    <tr>
    <td><h1><b>Nasi Padang</b>
    </td>
    <form action="/transaksi" method=""post>
    </tr>
        
    `;
}

function halamanEdit(){
    return `
        <div class="containerMakanan">
            <h1>Edit</h1>
            <button>Pilih Minuman</button>
        </div>
        
    `;
}

function halamanReservasi(){
    return `
        <div class="containerMakanan">
            <h1>Reservasi</h1>
            <button>Pilih Minuman</button>
        </div>
        
    `;
}

function halamanRiwayat(){
    return `
        <div class="containerMakanan">
            <h1>Riwayat</h1>
            <button>Pilih Minuman</button>
        </div>
        
    `;
}