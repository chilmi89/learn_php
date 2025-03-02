<?php

// membuat array dengan metode function array
$angka = array(1, 2, 3, 4, 5);
var_dump($angka);

// membuat array dengan metode array literal
$nama = ['achmad', 'chilmi', 'shynix'];
var_dump($nama); 


// mengakses data dalam array menggunakan index nomor
echo "data index ke 4 : {$angka[4]}" ;


echo "\n";
// mengubah data array menggunakan nomor index
$angka[0] = 10;
echo "data index ke 0 menjadi {$angka[0]}" ;

// manambah data di array

$angka[] = 6;
echo "\n";
var_dump($angka);


// menghapus data di array
unset($angka[5]);
echo "\n";
var_dump($angka);


// menghitung jumlah data di array
echo "\n";
echo count($angka);