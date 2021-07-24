<?php

// $nama = "MOH IBNU ABDURROHMAN SUTIO";
// echo strtolower($nama);
// echo "\n";
// $kata = "SAYA Sedang Belajar PHP di DUNIAILKOM";
// echo strtoupper($kata);

function cekusername($username)
{
    $username_db = "Ibnu";
    if ($username !== $username_db) {
        echo "username tidak terdaftar";
    } else {
        echo "berhasil, username sama!";
    }
}

// ucfirst digunakan untuk mengkonversi huruf pertama pada kata pertama menjadi uppercase
cekusername(ucfirst("ibnu"));
echo "\n";
// ucwords mengubah huruf depan tiap kata menjadi uppercase
$kata = "ucwords mengubah huruf depan tiap kata menjadi uppercase";
echo ucwords($kata);
