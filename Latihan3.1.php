<?php 
class kendaraan
{
    var $jumlahRoda=4;
    var $warna;
    var $harga=100000000;
    var $merek;
    var $bahanBakar = "Premium";
    var $tahunPembuatan=2004;
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

}
//instansiasi kedua
$ObjekKendaraan = new kendaraan();
echo "jumlah roda : ".$ObjekKendaraan ->jumlahRoda."<br/>";
echo "Status Harga : ".$ObjekKendaraan ->statusHarga()."<br/>";
echo "Status Subsidi : ".$ObjekKendaraan -> statusSubsidi();
?>