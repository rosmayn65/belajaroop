<?php
class RPL1
{
    public $jml_siswa;
    public $perempuan;
    public $lakilaki;
    public $nama_walas;

    public function Data()
    {
        return "Hadir";
    }
}
$rpl = new RPL1();
$rpl->nama_walas="Pa Sofwan";
$rpl->jml_siswa=35;
$rpl->lakilaki="20";
$rpl->perempuan="15";
echo "Kelas XI RPL 1<br> Wali Kelas : $rpl->nama_walas
    <br>Siswa Laki-Laki : $rpl->lakilaki
    <br>Siswa Perempuan : $rpl->perempuan
    <br>Jumlah Siswa : $rpl->jml_siswa";