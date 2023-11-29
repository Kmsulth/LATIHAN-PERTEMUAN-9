<?php
$suhu= -100 ;
if($suhu >=100 OR $suhu<0){
    echo "Cuaca Ekstream";
}elseif($suhu >=32){
    echo " Cuaca Panas";
}
elseif( $suhu < 32){
    echo "Cuaca Dingin";
}
?>