<?php
 
// buat class hutang
class Hutang {
 
   // buat protected property
   protected $kasbon=100000;
 
   public function OrangHutang() {
      return $this->kasbon;
   }
   protected function Bayar() {
      return "Novi membayar hutangnya";
   }
   public function Paksa_Hidup() {
      return $this->Bayar();
   }
}
  
// buat objek dari class hutang (instansiasi)
$hutang1 = new Hutang();
  
// jalankan method akses_pemilik()
echo $hutang1->OrangHutang(); // "Novi"
  
// jalankan method paksa_hidup()
echo $hutang1->Paksa_Hidup(); // "Novi membayar hutangnya"
?>