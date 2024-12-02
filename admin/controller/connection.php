<?php

$connection = mysqli_connect("localhost", "root", "", "angkatan3_praujikom2");

if (!$connection) {
    echo "Unable to connect";
    die;
}
