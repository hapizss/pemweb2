<?php
$profilearray = ["nama" => "hapis" ,
    "kelas" => "si14"];

  //  print_r($profilearray);
// foreach($profilearray as $profile) {
    // echo $profile['nama'];
// }

$multiarray = [
    ['nama' => 'hapis',
    'kelas' => 'rpl1'
    ],[
        'nama' => 'sri',
        'kelas' => 'multimedia'
    ]
];

foreach($multiarray as $multi){
    echo $multi['nama'] . "<br>";
}
