<?php
function divideArray($a){
	if(count($a)>2)
		$pivot=ceil(count($a)/2);
	else
		$pivot=1;
	return array(array_slice($a,0,$pivot),array_slice($a,$pivot));

}

function mergeArray($a,$b){

			
	$c=array();
	while(count($a)&&count($b))
	{

		if($a[0]>$b[0])
			$c[]=array_shift($b);
		else
			$c[]=array_shift($a);

	}
	
	return array_merge($c,$a,$b);
}

function mergeSort($a){

	if(count($a)==1)
		return $a;
	else{
		$parts=divideArray($a);
		return mergeArray(mergeSort($parts[0]),mergeSort($parts[1]));

	}
}

$a=[33,55,12,95,20,2,10,4,5];
$a=mergeSort($a);
echo implode(' ',$a);
