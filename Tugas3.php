<?php
class angsuran
{
    var $besaran_pinjaman = 1000000;
    var $bunga = 0.1;
    var $besar_angsuran;
    var $lama_angsuran = 5;
    var $total_pinjaman;
    var $denda_keterlambatan;
    var $terlambat = 40;
    function totalpinjaman()
    {
       $bunga = $this->besaran_pinjaman*0.1;
       $total_pinjaman = $bunga + $this->besaran_pinjaman;
       return $total_pinjaman;
    }
    function besaranangsuran()
    {
        return $this->besaran_pinjaman/5;
    }
    function totalbunga()
    {
        $bunga = $this->besaran_pinjaman*0.1;
        return $bunga;
    }
    function totalangsuran()
    {
        $totalpinjaman = $this->besaran_pinjaman*0.1 + $this->besaran_pinjaman;
        $total_angsuran = $totalpinjaman/5;
        return $total_angsuran;
    }
    function dendaketerlambatan()
    {
        $totalpinjaman = $this->besaran_pinjaman*0.1 + $this->besaran_pinjaman;
        $total_angsuran = $totalpinjaman/5;
        $denda_keterlambatan = $total_angsuran*40*0.0015;
        return $denda_keterlambatan;
    }
    function besaranpembayaran()
    {
        $totalpinjaman = $this->besaran_pinjaman*0.1 + $this->besaran_pinjaman;
        $total_angsuran = $totalpinjaman/5;
        $denda_keterlambatan = $total_angsuran*40*0.0015;
        $total_pembayaran = $denda_keterlambatan + $total_angsuran;
        return $total_pembayaran;
    }


}
//objek
$Tokopenggadaian = new angsuran;
echo "Penggadaian Syariah"."<br/>";
echo "Besaran Pinjaman : Rp.". $Tokopenggadaian->besaran_pinjaman."<br/>";
echo "Besar Bunga : ". $Tokopenggadaian->bunga."<br/>";
echo "Total Pinjaman : Rp.". $Tokopenggadaian->totalpinjaman()."<br/>";
echo "Lama Angsuran (bulan) : ". $Tokopenggadaian->lama_angsuran."<br/>";
echo "Besaran angsuran : Rp.". $Tokopenggadaian->besaranangsuran()."<br/>";
echo "Total Bunga : Rp.". $Tokopenggadaian->totalbunga()."<br/>";
echo "Total Angsuran : Rp.". $Tokopenggadaian->totalangsuran()."<br/>";
echo "Denda Keterlambatan : Rp.". $Tokopenggadaian->dendaketerlambatan()."<br/>";
echo "Besaran Pembayaran : Rp.". $Tokopenggadaian->besaranpembayaran()."<br/>";
?>