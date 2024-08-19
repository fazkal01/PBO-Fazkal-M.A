<?php
$nilai;
class Celcius
{
    public function konversi($nilai)
    {
        return [
            'fahrenheit' => $nilai * 9 / 5 + 32,
            'kelvin' => $nilai + 273.15,
            'reamur' => $nilai * 4 / 5
        ];
    }
}
class Fahrenheit
{
    public function konversi($nilai)
    {
        return [
            'celsius' => ($nilai - 32) * 5 / 9,
            'kelvin' => ($nilai - 32) * 5 / 9 + 273.15,
            'reamur' => ($nilai - 32) * 4 / 9
        ];
    }
}
class Kelvin
{
    public function konversi($nilai)
    {
        return [
            'celsius' => $nilai - 273.15,
            'fahrenheit' => ($nilai - 273.15) * 9 / 5 + 32,
            'reamur' => ($nilai - 273.15) * 4 / 5
        ];
    }
}
class Reamur
{
    public function konversi($nilai)
    {
        return [
            'celcius' => $nilai * 5 / 4,
            'fahrenheit' => $nilai * 9 / 4 + 32,
            'kelvin' => $nilai * 5 / 4 + 273.15
        ];
    }
}

$Temp = 45;

$konversicelcius = new celcius();
$konversifahrenheit = new Fahrenheit();
$konversikelvin = new Kelvin();
$konversireamur = new Reamur();

echo "Konversi dari Celsius:\n";
print_r($konversicelcius->konversi($Temp));
?>