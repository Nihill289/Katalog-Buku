<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Pertemuan 4</title>
</head>
<body>
    <h1>Soal Dan Jawaban Pertemuan 5</h1><br><br>
<p><b>1. Apa fungsi @csrf?</b></p>
<p>Fungsi dari @csrf adalah untuk menghasilkan token keamanan rahasia berupa input tersembunyi (hidden input) di dalam form HTML. Token ini digunakan oleh Laravel untuk melindungi aplikasi dari serangan CSRF (Cross-Site Request Forgery), yaitu serangan di mana pihak ketiga mencoba mengirimkan data palsu atau memanipulasi tindakan atas nama pengguna yang sah tanpa seizin mereka.</p>

<p><b>2. Mengapa $request->validated() atau hasil validate lebih aman daripada all()?</b></p>
<p>Menggunakan $request->validated() jauh lebih aman karena hanya mengambil data input yang sudah lolos seleksi dan aturan validasi yang Anda tentukan. Sebaliknya, metode all() akan mengambil seluruh data yang dikirimkan oleh user tanpa filter. Jika menggunakan all(), aplikasi rentan terhadap serangan Mass Assignment, di mana hacker bisa menyisipkan input berbahaya (misalnya mengubah role menjadi admin atau mengganti harga) yang tidak seharusnya diubah oleh pengguna biasa.</p>

<p><b>3. Apa fungsi old()?</b></p>
<p>Fungsi dari old() adalah untuk mempertahankan nilai input yang sudah diisi oleh pengguna sebelum form dikirimkan. Ketika proses validasi gagal, Laravel akan mengembalikan pengguna ke halaman form semula. Dengan menggunakan fungsi old(), pengguna tidak perlu repot mengetik ulang seluruh data dari awal karena teks yang sudah mereka isi sebelumnya otomatis terisi kembali di dalam input field.</p>

<p><b>4. Jelaskan pola Post/Redirect/Get.</b></p>
<p>Pola Post/Redirect/Get (PRG) adalah praktik desain web yang digunakan untuk mencegah pengiriman data ganda secara tidak sengaja. Polanya bekerja dalam tiga tahap: Pertama (Post), pengguna mengirimkan data melalui form. Kedua (Redirect), server memproses data tersebut lalu menginstruksikan browser untuk mengalihkan halaman (redirect) ke URL baru. Ketiga (Get), browser memuat halaman tujuan menggunakan metode GET. Dengan pola ini, jika pengguna menyegarkan (refresh) halaman setelah data tersimpan, browser tidak akan mengirim ulang form tersebut melainkan hanya memuat ulang halaman tampilan saja.</p>

</body>
</html>