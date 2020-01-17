<?php

$connect = new mysqli("localhost","root","","uzlab2019");

if($connect){

}else {
	echo "Fallo, revise ip o firewall";
	exit();
}