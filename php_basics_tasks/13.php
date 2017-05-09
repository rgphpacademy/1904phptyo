<?php

	$s = 100;// km
	
	$t = 1;// h
	
	$v = $s/$t;// km/h
	
	$v = $s/$t;
	
	$s1 = $s * 1000;// m
	
	$t1 = $t * 60*60;// s
	
	$v1 = $s1/$t1;// m/s
	
	echo "Your car's speed " . $v . " km/h" . " or " . round($v1, 2) . " m/s."; 
	
	
	
	
	
	

?>