<?php
$nilai = 90;
$status = false;

if ($nilai > 80) {
    $status = true;
}

if ($status == true) {
    echo "selamat anda dinyatakan lulus!";
} else {
    echo "mohon anda gagal!";
}