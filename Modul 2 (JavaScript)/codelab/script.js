function jumlahkan() {
    let satu = parseFloat(document.getElementById("pertama").value);
    let dua = parseFloat(document.getElementById("kedua").value);

    let hasil = satu + dua;

    alert(`Hasil Penjumlahan = ${hasil}`)
}

function hapus() {
    document.getElementById("pertama").value = "";
    document.getElementById("kedua").value = "";
}
