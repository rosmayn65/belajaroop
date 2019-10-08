<?php
 
// buat class hutang
class Hutang {
 
   // buat protected property
   protected $kasbon;
  
  // buat protected method
   protected function Bayar() {
      return "Novi membayar hutangnya";
   }
}
 
// buat objek dari class hutang (instansiasi)
$hutang1 = new Hutang();
  
// set protected property akan menghasilkan error
$hutang1->kasbon=100000;
// Fatal error: Cannot access protected property Hutang::$kasbon
  
// tampilkan protected property akan menghasilkan error
echo $hutang1->kasbon;
// Fatal error: Cannot access protected property Hutang::$kasbon
  
// jalankan protected method akan menghasilkan error
echo $hutang1->Bayar();
// Fatal error: Call to protected method Hutang::Bayar() 
// from context
?>