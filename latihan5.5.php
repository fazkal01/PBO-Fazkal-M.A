<?php
class Supermarket {
    public $pelanggan;
    public $kartu;
    public $total;
    public $diskon;
    public $biayakeluar;
 
    function pembeli($pelanggan) {
        switch ($pelanggan) {
            case 1:
                $this->kartu = "Berlangganan";
                $this->total = 200000;
                break;
            case 2:
                $this->kartu = "Berlangganan";
                $this->total = 570000;
                break;
            case 3:
                $this->kartu = "Tidak Memiliki";
                $this->total = 120000;
                break;
            case 4:
                $this->kartu = "Tidak Memiliki";
                $this->total = 90000;
                break;
            default:
                echo "Pembeli tidak valid!";
                return;
        }
 
   
        if ($this->kartu == "Berlangganan") {
            if ($this->total > 500000) {
                $this->diskon = 50000;
            } elseif ($this->total > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }
        } else {
            if ($this->total > 100000) {
                $this->diskon = 5000;
            } else {
                $this->diskon = 0;
            }
        }
 
        $this->biayakeluar = $this->total - $this->diskon;
 
     
        echo "Pembeli $pelanggan<br/>";
        echo "Kartu Member: {$this->kartu}<br/>";
        echo "Total Belanja: {$this->total}<br/>";
        echo "Diskon: {$this->diskon}<br/>";
        echo "Biaya yang dikeluarkan: {$this->biayakeluar}<br/><br/>";
    }
}
 
 
$supermarket = new Supermarket();
for ($i = 1; $i <= 4; $i++) {
    $supermarket->pembeli($i);
}
?>
 