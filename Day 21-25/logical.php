<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello 2world!";
}
echo "<br>";
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello3 world!";
}
echo "<br>";
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello 4world!";
}
echo "<br>";
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello5 world!";
}
echo "<br>";
$x = 100;  

if ($x !== 90) {
    echo "Hello6 world!";
}
echo "<br>";
?>  

</body>
</html>