<?php

class Buku {

public $judul;
public $penulis;
public $tahunpenerbit;

function __construct($judul, $penulis, $tahunTerbit){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->tahunTerbit = $tahunTerbit;
}

function tampilkanInformasi()
{
    echo "judul" . $this->judul . "<br>";
    echo "penulis" . $this->penulis . "<br>";
    echo "tahunTerbit" . $this->tahunTerbit . "<br>";
}
}

$buku1 = new Buku("Dilan 1990", "Uing Caringin", "2026");
$buku2 = new Buku("Menjadi Miliarder Semalam","Azael","2019");

$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();