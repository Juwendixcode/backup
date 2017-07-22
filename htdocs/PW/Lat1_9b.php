<?php

function pangkat($x,$y){
$hasil = pow($x, $y);
echo 'Hasil '.$x.' ^ '.$y.'= '.$hasil;
}
$x = 2;
$y = 3;
pangkat($x,$y);
?>