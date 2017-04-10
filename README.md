# sortalgorithmsphp
Sorting Algorithms in PHP 
<?php

$a=[33,55,12,95,20,2,10,4,5];
//rsort($a);

function bubbleSort(&$a){
	for($j=count($a);$j>0;$j--)
	for($i=0; $i<$j-1;$i++){
		if($a[$i] > $a[$i+1])
			swap($a,$i);
	}
}
function swapNeighbours(&$array,$i){
	$temp=$array[$i];
	$array[$i]=$array[$i+1];
	$array[$i+1]=$temp;
}
function insertionSort(&$a){
	for($i=1;$i<count($a);$a++)
	{
		$insertion=$i;
		for ($j=0; $j < $i; $j++) { 
			if($a[$j]<$a[$i])
				$insertion=$j;
		}
	}
}

//bubbleSort($a);
//echo implode(' ',$a);

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

$a=mergeSort($a);
echo implode(' ',$a);
