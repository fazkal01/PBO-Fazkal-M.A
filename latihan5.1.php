<?php
$nilai = 88;

if ($nilai > 90) {
    $grade = "Nilai A+";
} 
elseif ($nilai > 80) {
    $grade = "Nilai A";
}
elseif ($nilai > 70) {
    $grade = "Nilai B+";
}
elseif ($nilai > 60) {
    $grade = "Nilai B";
}
elseif ($nilai > 50) {
    $grade = "Nilai C+";
}
elseif ($nilai > 40) {
    $grade = "Nilai C";
}
elseif ($nilai > 30) {
    $grade = "Nilai D";
}
elseif ($nilai > 20) {
    $grade = "Nilai E";
}
else { 
    $grade = "Nilai F";
}

echo "Nilai Anda : $nilai<br>";
echo "Grade Anda : $grade";
?>