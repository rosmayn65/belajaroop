<?php
class Mobil
{
    public $merk = "Scoopy";
    public function __construct()
    {
        echo "Construct dari Mobil <br>";
    }

    public function __destruct()
    {
        echo "Destruct dari Mobil <br>";
    }
}
class Motor extends Mobil
{
    public function __construct()
    {
        parent::__construct();
        echo "Construct dari Motor <br>";
    }

    public function spesifikasi()
    {
        echo "Spesifikasi Motor : ";
    }

    public function __destruct()
    {
        echo "Destruct dari Mobil <br>";
        parent::__destruct();
    }
}
$matic = new Motor();
$matic->spesifikasi();
echo $matic->merk . "<br>";
