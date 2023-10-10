let bilPertama = document.getElementById('pertama');
let bilKedua = document.getElementById('kedua');
let form = document.getElementById('pendaftaran')
let inputNama = document.getElementById('nama');
let inputEmail = document.getElementById('email');
let inputAlamat = document.getElementById('alamat');

function jumlahkan() {
    let hasil = parseFloat(bilPertama.value) + parseFloat(bilKedua.value)
    alert('Hasil Penjumlahan = ' + hasil)
}

function hapus() {
    bilPertama.value = '';
    bilKedua.value = '';
}

form.addEventListener("submit", () => {
    if (inputNama.value === "" || inputEmail.value === "" || inputAlamat.value === "") {
        alert("Anda harus mengisi data dengan lengkap !");
    }else{
        alert("Success, Data pendaftaran dikirim!");
    }
});