<?
	extract($_POST);
	$totalt=$total+$total2+$total3+$total4+$total5+$total6;
$ivatotalt= ($totalt*$civa)/100;
$totaltotal=$totalt+$ivatotalt;
$totalmitad= $totaltotal/2;


/*******************
	Sesion de estudio
*****************/

$totalmenos10= ($totalt*90)/100;
$subtotal= ($totalt*15)/100;
$subtotal2=($totalt*25)/100;
$sixty_one=($totalt*61)/100;
$ninety= ($totalt*90)/100;
$hundred_nineteen=($totalt*119)/100;




$totalmasquince= $totalt+$subtotal;
$totaltmasveinticinco=$totalt+$subtotal2;



$cincuenta= ($totalmasquince*50)/100;

$fifty= ($totaltmasveinticinco*50)/100;
$twentyfive= ($totaltmasveinticinco*25)/100;

/*****************
	paquete premium
*****************/

$totalmas61=$totalt+$sixty_one;

$premium_10= $totalmas61*90/100;

$premium= $totalmas61*15/100;
$premium_15=$totalmas61+$premium;

$half_premium= $premium_15*50/100;


$premium_25_1= $totalmas61*25/100;
$premium_25=$totalmas61+$premium_25_1;

$premium_25_2=$premium_25*50/100; 

$premium_25_25=$premium_25*25/100;


/*****************
	paquete platinum
*******************/
$totalmas90=$totalt+$ninety;

$platinum_10=$totalmas90*90/100;
$platinum_15_1=$totalmas90*15/100;

$platinum_15= $totalmas90+$platinum_15_1;

$platinum_15_50=$platinum_15*50/100;


$platinum_25_1= $totalmas90*25/100;
$platinum_25= $totalmas90+$platinum_25_1;

$platinum_25_50= $platinum_25*50/100;
$platinum_25_25= $platinum_25*25/100;
/****************
	paquete VIP
*****************/


$totalmas119=$totalt+$hundred_nineteen;

$totalmas119_10= $totalmas119*90/100; /**/

$totalmas119_15= $totalmas119*15/100; /*esto es solo el 15%*/

$totalmas119_15_15= $totalmas119+$totalmas119_15;/*esto es el precio mas el 15%*/

$totalmas119_15_50= $totalmas119_15_15*50/100;



$VIP_25_1=$totalmas119*25/100;

$VIP_25=$totalmas119+$VIP_25_1;




$VIP_25_50= $VIP_25*50/100;
$VIP_25_20= $VIP_25*25/100;


		/*
			aqui hay que hacer condicionales.. si paquete es igual a quinceañeras se situan unas cosas
			si paquete es igual a embarazadas se debe situar otra cosa y asi..
		*/
?>