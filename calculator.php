<?php 

$broj_1=$_GET['broj_1'];
$broj_2=$_GET['broj_2'];

$operacija=$_GET['operacija'];
$rezultat="";

if($operacija=="-"){
    $rezultat=$broj_1-$broj_2;
}
elseif($operacija=="+"){
    $rezultat=$broj_1+$broj_2;
}
elseif($operacija=="*"){
    $rezultat=$broj_1*$broj_2;
}
elseif ($operacija=="/") {
    $rezultat=$broj_1/$broj_2;
}
else{
    $rezultat= 'Nepostojeca operacija, probajte sa + - * /';
}

echo $rezultat;
