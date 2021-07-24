<?php

$nim = '412E00036';
$position = strpos($nim, 'E');

if ($position != 0) {
    echo "nim tidak valid";
} else {
    echo "nim sudah benar";
}
