<?php
$nilai_bindo = 101;
$nilai_ipa = 100;

if($nilai_bindo <= 100 && $nilai_ipa <= 100) {
    if ($nilai_bindo > 70 && $nilai_ipa > 75) {
        echo "selamat anda lulus";
    } else {
        echo "maaf kamu harus remidi";
    }
} else {
    echo "input nilai salah";
}