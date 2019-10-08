<?php
// class produk
class Produk {
  
    // property untuk class laptop
    var $nama_produk;
    var $harga_produk;
    var $tgl_kadaluarsa;
   
    // method untuk class laptop
    function Beli() {
      return "Terimkasih Sudah Membeli Di Toko Kami";
     }
 }
// objek dari class produk (instansiasi)
// instansiasi ditandai dengan keyword 'new'
$produk1 = new Produk();
  
// set property
$produk1->nama_produk="Chitatos Ayam Panggang";
$produk1->harga_produk=9000;
$produk1->tgl_kadaluarsa="28 Oktober 2020";
  
// tampilkan property
echo "Nama Produk : $produk1->nama_produk
    <br> Harga Produk : Rp.$produk1->harga_produk
    <br> Tanggal Kadaluarsa : $produk1->tgl_kadaluarsa<br>";
echo $produk1->Beli();
echo "<br>";