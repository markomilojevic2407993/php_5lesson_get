<?php 

$kolicina= intval($_GET['kolicina']) ;

$voce=$_GET['izbor'] ;

$vrednost="";

if($voce=='jabuke'){
    $vrednost=60;
}
elseif($voce=='kruske'){
    $vrednost=90;
}
elseif($voce=='sljive'){
    $vrednost=25;
}
elseif($voce=='sljive'){
    $vrednost=25;
}
elseif($voce=='tresnje'){
    $vrednost=110;
}
elseif($voce=='musmule'){
    $vrednost=150;
}
$racun= $kolicina * $vrednost;

if(isset($_GET['porez'])){
    $racun*=1.2;
} 


echo $racun;








?>