<?php
class Komputer
{
    public $processor = "Intel Core I7";
    public function __construct()
    {
        echo "Construct dari Komputer <br>";
    }

    public function __destruct()
    {
        echo "Destruct dari Komputer <br>";
    }
}
class Laptop extends Komputer
{
    public function __construct()
    {
        parent::__construct();
        echo "Construct dari Laptop <br>";
    }

    public function spesifikasi()
    {
        echo "Spesifikasi Laptop : ";
    }

    public function __destruct()
    {
        echo "Destruct dari Komputer <br>";
        parent::__destruct();
    }
}
$lenovo = new Laptop();
$lenovo->spesifikasi();
echo $lenovo->processor . "<br>";
