<?php

function kalkulator($angka1, $angka2, $operator) {
    switch ($operator) {
        case '+':
            return $angka1 + $angka2;
            break;
        case '-':
            return $angka1 - $angka2;
            break;
        case '*':
            return $angka1 * $angka2;
            break;
        case '/':
            return $angka1 / $angka2;
            break;
        case '%':
            return $angka1 % $angka2;
            break;
        default:
            echo "operator tidak valid";
            break;
    }
}

echo "kalkulator sederhanan \n";
echo "--------------------- \n";
$x = 24;
$y = 5;
$op = "+";

$hasil = kalkulator($x, $y, $op);
echo "hasil penjumlahan $x + $y = $hasil";

?>