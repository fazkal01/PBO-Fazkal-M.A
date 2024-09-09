<?php 
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $harga;
    var $merek;
    var $bahanBakar;
    var $tahunPembuatan;
    var $platnomber;
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
    function hargabekas()
    {
        if($this->tahunPembuatan > 2005)
        {
            $hargabekas = $this->harga - ($this->harga * 0.2);
        }
        elseif ($this->tahunPembuatan < 2005 && $this->tahunPembuatan > 2001)
        {
            $hargabekas = $this->harga - ($this->harga * 0.3);
        }
        elseif ($this->tahunPembuatan < 2000)
        {
            $hargabekas = $this->harga - ($this->harga * 0.4);
        }
        return $hargabekas;
    }
    function pajak()
    {
        if($this->tahunPembuatan <= 2017);
        {
            $pajak = $this->harga * 0.025;
        }
        return $pajak;
    }
    function operasi()
    {
    if ($this->platnomber % 2 == 0){
        $hari = "Selasa, Kamis, dan Sabtu";
    }
    else 
    {
        $hari = "senin, rabu, jumat, dan minggu ";
    }
    return $hari;
    }      
}
//instansiasi kedua
$ObjekKendaraan = new kendaraan();
$ObjekKendaraan->harga = 500000000;
$ObjekKendaraan->bahanBakar = "Premium";
$ObjekKendaraan->tahunPembuatan = 2008;
$ObjekKendaraan->platnomber = 2128;
echo "Harga Kendaraan : Rp. ".number_format($ObjekKendaraan ->harga)."<br/>";
echo "Status Harga : ".$ObjekKendaraan ->statusHarga()."<br/>";
echo "Status BBM : ".$ObjekKendaraan -> statusSubsidi()."<br/>";
echo "Harga Bekas : Rp. ".number_format($ObjekKendaraan ->hargabekas())."<br/>";
echo "Pajak : Rp. ".number_format($ObjekKendaraan ->pajak())."<br/>";
echo "Hari Beroperasi : ".$ObjekKendaraan ->operasi()."<br/>";
?>