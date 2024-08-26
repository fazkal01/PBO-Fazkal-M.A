<?php 
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $harga;
    var $merek;
    function statusHarga()
    {
        if($this-> harga > 50000000)
        {
            $status = "harga kendarann mahal";
        }
        else 
        {
            $status = "harga kendaraan murah";
        }
        return $status;
    }
}
//instansiasi kedua
//objek1
$ObjekKendaraan1 = new Kendaraan;

$ObjekKendaraan1 ->merek = "Yamaha Mio";
$ObjekKendaraan1 ->harga = 10000000;
//objek2
$ObjekKendaraan2 = new Kendaraan;

$ObjekKendaraan2 ->merek = "Toyota Avanza";
$ObjekKendaraan2 ->harga = 100000000;
//objek3
$ObjekKendaraan3 = new Kendaraan;

$ObjekKendaraan3 ->merek = "Chevy C8";
$ObjekKendaraan3 ->harga = 1000000000;

echo "Objek 1";
echo "<br/>";
echo "Merek : ".$ObjekKendaraan1 ->merek;
echo "<br/>";
echo "Harga Kendaraan : ".$ObjekKendaraan1 ->harga;
echo "<br/>";
echo "Status Harga : ".$ObjekKendaraan1 ->statusharga();
echo "<br/>";
echo "Objek 2";
echo "<br/>";
echo "Merek : ".$ObjekKendaraan2 ->merek;
echo "<br/>";
echo "Harga Kendaraan : ".$ObjekKendaraan2 ->harga;
echo "<br/>";
echo "Status Harga : ".$ObjekKendaraan2 ->statusharga();
echo "Objek 3";
echo "<br/>";
echo "Merek : ".$ObjekKendaraan3 ->merek;
echo "<br/>";
echo "Harga Kendaraan : ".$ObjekKendaraan3 ->harga;
echo "<br/>";
echo "Status Harga : ".$ObjekKendaraan3 ->statusharga();
