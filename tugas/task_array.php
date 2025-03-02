<?php

$angka = array(1, 2, 3, 4, 5);
var_dump($angka);

$nama = ['achmad', 'chilmi', 'shynix'];
var_dump($nama); 

// soal 1 mencetak array index ke 4

echo "array index ke 4 : {$angka[4]}" ;

echo "\n";  
// mencetak semua perulangan menggunakan perulangan 

foreach ($nama as $nm => $value) {
    echo "nama index ke $nm : $value \n";
}


// mengurutkan array ASC DAN DESC

sort($angka);
echo "\n";
echo "array urutkan ASC : ";
var_dump($angka);

rsort($angka);
echo "\n";
echo "array urutkan DESC : ";
var_dump($angka);