<?php
if (isset($_POST['sbm'])){
    $a = $_POST['nama'];
    $b = $_POST['nik'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];
}
class Keluarga
{
    public $nama,  $nik, $alamat, $umur;
    public function __construct($nama, $nik, $alamat, $umur)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
    }
    public function anggota_keluarga()
    {
        for ($x=0; $x < count($this->nama); $x++) { 
            echo "Nama : " . $this->nama[$x];
            echo "NIK : " . $this->nik[$x];
            echo "Alamat : " . $this->alamat[$x] . ",";
            echo "Umur : " . $this->umur[$x] . ",";
            echo "<br>";
        }
    }
}
if (isset ($_POST['sbm'])) {
    $a = $_POST['nama'];
    $b = $_POST['nip'];
    $c = $_POST['alamat'];
    $d = $_POST['umur'];
}
echo "<center>Anggota Keluarga</center>";
$data = new Keluarga($a[], $b[], $c[], $d[]);
echo $data->anggota_keluarga() ."<br>";
var_dump($data->anggota_keluarga());