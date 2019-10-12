<?php
class Lingkaran
{
    public $pi = 3.14;
    public $jari;
    public $luas;
    public $keliling;

    public function __construct($jari) {
        return $this->jari = $jari;
    }
    public function Hitung_Luas()
    {
        $luas = $this->pi = $this->jari = $this->jari;
        return $luas;
    }
    public function Hitung_Keliling()
    {
        $keliling = 2 * ($this->pi * $this->jari);
        return $keliling;
    }
}
$buled = new Lingkaran(10);
echo "Jari-Jari Lingkaran = $buled->jari<br>";
echo "Luas Lingkaran = ". $buled->Hitung_Luas() ."<br>";
echo "Keliling Lingkaran = ". $buled->Hitung_Luas() ."<br>";
?>