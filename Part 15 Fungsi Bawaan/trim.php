<?php

// $username = "ibnu abdurrohman sutio   ";
// $valid_username = trim($username);
// echo $valid_username;

$username = "ibnu ";
$db_username = " ibnu";
if (trim($username) == trim($db_username)) {
    echo "username valid";
} else {
    echo "username invalid";
}

?>