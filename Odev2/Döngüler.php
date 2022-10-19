<?php

$i = -1;
$a = 0;
$c =0;
$u =0;
$sehirler = array(
	"Balıkesir",
	"Eskişehir",
	"Kütahya",
	"Ankara",
	"İstanbul",
);

while($i<count($sehirler)-1){
	print_r($sehirler[$a]);
	echo "<br />";
	$i++;
	$a++;
}
echo "<br />";

for($b=-1; $b<count($sehirler)-1; $b++)
{
	print_r($sehirler[$c]);
	echo "<br />";
	$c++;
	
	
}
	echo "<br />";
do{
	
	print_r($sehirler);
	
}while($i<count($sehirler)-1);

foreach($sehirler as $ss){
	
	echo $ss."<br />";
	
}	
echo "<br />";

for($f = 0;$f<count($sehirler)-1; $f++){
	
	if($f == 2){
		
		break;
	}
	echo "<br />";
	print_r($sehirler[$u]);
	$u++;
}







?>