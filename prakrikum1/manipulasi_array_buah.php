<?php
$arraybuah = ["apel","jeruk","kiwi"];

//mengurutkan value dari array
sort($arraybuah);

//menghapus value paling akhir
array_pop($arraybuah);

//menghapus semua value 
unset($arraybuah[1]);

//menambahkan velue paling belakang
array_push($arraybuah, "buah dragon");

//menghapus value oaling depan
array_shift($arraybuah);

//menambahkan value paling depan
array_unshift($arraybuah, "durian");

//mengubah value array
$arraybuah[2] = "pisang";   

foreach($arraybuah as $buah){
    echo $buah . "<br>";
}
