<?php
function penjumlahan()
{
    $array_argumen = func_get_args();
    $jumlah_argumen = func_num_args();
    $nilai_argumen = func_get_arg(1);

    echo "array argumen : \n";
    var_dump($array_argumen);
    echo "\n";
    echo "jumlah argumen : " . $jumlah_argumen;
    echo "\n";
    echo "nilai argumen : " . $nilai_argumen;

}

echo "rincian dari fungsi penjumlahan(1,2)";
penjumlahan(1,2);
