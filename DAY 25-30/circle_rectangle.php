

<!DOCTYPE html>
<html>
<body>



<?php

echo "area of circle";
echo "<br>";
$diameter = 4.0;
$pi = 3.14;
$title="Circle";


function circleArea($diameter, $pi) 
{
    $area = $diameter * $pi; 
    return $area; 
} 

echo circleArea ($diameter,$pi); 

echo "<br>";
echo "area of rectangle";
echo "<br>";
$length = 14;  
 $width = 12;  
 echo "area of rectangle is $length * $width= " . ($length * $width) . "<br />"; 

?>

</body>
</html>