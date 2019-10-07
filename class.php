<?php
//1. Class adalah sebuah blueprint/template
//untuk membuat instance dari object
//2. Class mendefinisikan object
//3. Class menyimpan data (property) dan
//   perilaku (method)

//Membuat class ddengan nama Kucing
class Kucing
{
  //Membuat Property
  public $warna="coklat";
  public $jml_kaki="4";
  public $mkn_fav="wishkats";

  // membuat method dengan nama bersuara
  public function bersuara()
  {
      return "Miaww";
  }
}
// membuat objek baru
// ditandai dengan keyword "new"
$kucing1 = new Kucing();
$kucing1->warna="oren";
// var_dump($kucing1);
echo "Warna Kucing : $kucing1->warna<br>";
echo "Suaranya :" .$kucing1->bersuara();
