<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i); $j++) {
        echo "* ";
    }
 
    echo "<br />";
}
?>

<?php
echo "<br />";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br />";
}
 
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br />";
}
?>

<?php
echo "<br />";
for ($i = 5; $i <= 1; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br />";
}
 
for ($i = 1; $i >= 5; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br />";
}   
?>