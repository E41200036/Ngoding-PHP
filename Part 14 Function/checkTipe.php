<?php

function tipedata($nilai) {
    if (is_numeric($nilai)) {
        echo "$nilai adalah angka";
    } else if(is_bool($nilai)) {
        echo "$nilai adalah boolean";
    }
}

tipedata(23);
echo "\n";
tipedata(true);
