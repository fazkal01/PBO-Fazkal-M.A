<?php
class Kendaraan
{
    var $jumlahRoda=4;
    var $warna;
    var $harga = 100000000;
    var $merek;
    var $bahanBakar = "Premium";
    var $tahunPembuatan=2004;
    function statusHarga()
    {
        if($this-> harga > 50000000)
        {
            $status = "harga kendaraan mahal";
        }
        else 
        {
            $status = "harga kendaraan murah";
        }
        return $status;
    }
    function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar=="Premium")
        {
            $status ="DAPAT SUBSIDI";
        }
        else
        {
            $status = "TIDAK DAPAT SUBSIDI";  
        }
            return $status;
    }
    function hargasecond()
    {
        return $this->harga*0.8;
    }
    
}
//objek1
$ObjekKendaraan1 = new Kendaraan;

$ObjekKendaraan1 ->harga = 1000000;
$ObjekKendaraan1 ->tahunPembuatan = 1999;
echo "Objek 1". "<br/>";
echo "status harga : ".$ObjekKendaraan1->statusharga(). "<br/>";

//Objek 2
$ObjekKendaraan2 = new Kendaraan;

$ObjekKendaraan2 -> bahanBakar = "Pertamax";
$ObjekKendaraan2 -> tahunPembuatan = 1999;
echo "Objek 2";
echo "<br/>";
echo "Status BBM : ".$ObjekKendaraan2 ->statusSubsidi();
echo "<br/>";
echo "Status BBM : ".$ObjekKendaraan2 ->hargasecond();
?>
