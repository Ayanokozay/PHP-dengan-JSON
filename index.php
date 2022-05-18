<?php

$data = file_get_contents("data.json");
$data = json_decode($data);

foreach ($data as $value) {
    echo "Nama : ".$value->nama."<br>";
    echo "NIM : ".$value->nim."<br>";
    echo "Kelas : ".$value->kelas."<br>";
    echo "Jurusan : ".$value->jurusan."<br>";
    echo "Alamat : ".$value->alamat."<br>";

echo "<hr>";
}

?>