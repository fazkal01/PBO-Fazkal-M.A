Class Mobil {
var $jumlahroda = 4;
var $Warna = "Merah";
var $Bahanbakar = "pertamax";
var $Harga = 120000000;
var $merek = 'A';

public function statusharga()
{
if ($this->harga > 50000000) $status = "mahal";
else $status = "murah";
return $status;
}
}