<?php
$nim = "A412000364";

if (strlen($nim) > 9) {
    echo "nim tidak valid";
} else {
    if (strtolower(substr($nim, 0, 1)) == 'e') {
        echo "nim tersebut berasal dari TIF";
    } elseif (strtolower(substr($nim, 0, 1)) == 'a') {
        echo "nim tersebut berasal dari TKK";
    } else {
        echo "nim tidak teridentifikasi";
    }
}


// $prodi_id = substr($nim, 0, 1);
// echo $prodi_id;