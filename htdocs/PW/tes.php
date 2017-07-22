<?php
$array= array('kota','Jawa','Sunda','Makassar');

echo"sebelum<br>";
foreach ($array as $key){
echo $key."<br>";
}

echo"<br>";

sort($array);
echo"sesudah<br>";
foreach ($array as $key){
echo $key."<br>";
}



function myGreeting($firstName){
 echo "Hello there ". $firstName . "!<br />";
}

myGreeting('Oke');

function mySum($numX, $numY){
    $total = $numX + $numY;
    return $total; 
}
echo mySum(2,3);


?>

