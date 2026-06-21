<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_portofolio1"
);


if(!$conn){

    die("Koneksi database gagal : " . mysqli_connect_error());

}

?>