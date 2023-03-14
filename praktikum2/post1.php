<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "hapis" && $password == "hapis"){
    echo "berhasil";
}else{
    echo "gagal";
}