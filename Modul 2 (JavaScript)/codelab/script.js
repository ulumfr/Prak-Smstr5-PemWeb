let satu = document.getElementById("pertama");
let dua = document.getElementById("kedua");

function jumlahkan() {
    let hasil = parseFloat(satu.value) + parseFloat(dua.value);
    alert(`Hasil Penjumlahan = ${hasil}`)
}

function hapus() {
    satu.value = "";
    dua.value = "";
}