<?php
class Telebe {
 
  public $ad;
  public $soyad;
 
  public function qarsila()
  {
 

  }
 

  public function qeydiyyataAl()
  {

  }
 

  public function melumatlandir()
  {
    
  }
}
 
$telebe01 = new Telebe();
$telebe01 -> ad = "Memmed";
$telebe01 -> soyad = "Hesenov";
 
/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
?>