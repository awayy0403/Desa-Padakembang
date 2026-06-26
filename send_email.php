<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    $to = "vasyaaa454@gmail.com"; // Ganti dengan alamat email tujuan
    $subject = "Pesan dari $nama";
    $message = "Nama: $nama\n\nEmail: $email\n\nPesan:\n$pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan telah terkirim.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengirim pesan.";
    }
}
