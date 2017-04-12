<?php

$a=[33,55,12,95,20,2,10,4,5];

function bubbleSort(&$a){
	for($j=count($a);$j>0;$j--){
		for($i=0; $i<$j-1;$i++){
			if($a[$i] > $a[$i+1])
				swap($a,$i);
		}
	}
}
function swap(&$array,$i){
	$temp=$array[$i];
	$array[$i]=$array[$i+1];
	$array[$i+1]=$temp;
}

bubbleSort($a);
echo implode(' ',$a);