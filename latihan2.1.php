<?php
class guru
{
    var $nama_nama = array("de", "ce", "ve", "re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class murid
{
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;

}

class kurikulum
{
    var $tahun_akademik;
    var $sks_matkul;

}

class mobil
{
    var $jumlahroda = 4;
    var $warna = "merah";
    var $bahanbakar = "pertamax";
    var $harga = 120000000;
    var $merek = 'A';


    public function statusharga()
    {
        if ($this->harga > 50000000)
            $status = 'mahal';
        else
            $status = 'murah';
        return $status;
    }
}

$objekBMW = new mobil;
$objekTesla = new mobil;
$objekAudi = new mobil;
?>