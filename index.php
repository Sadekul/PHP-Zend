<?php 

$a="setu";
$b="sadekul";
$c= &$a;
echo $c."<br>";
define("a", "bangladesh", true);
define("A", "lue", true);
echo a."<br>";

function myfun(...$val){
	$val;
	echo "<pre>";
	print_r($val);
	echo "<pre>";
}
	myfun(3,4,5,setu,4.5);


 ?>