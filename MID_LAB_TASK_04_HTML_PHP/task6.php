<?php
	$search = 22;
	$df = 6;
	$Found = 0;
	$A = [22, 34, 3, 19, 344, 1];
	for ($i=0; $i < $df; $i++) { 
		
		if($A[$i] == $search){
			$Found = 1;
			echo "value Found in array";
		}
	}
	if($Found == 0) echo "value not found in array";
	echo "<br>";
	$search = 22;
	$found = 0;
	for ($i=0; $i < $df; $i++) { 

		if($A[$i] == $search){
			$found = 1;
			echo "value found in array";
		}
	}
	if($found == 0) echo "value not found in array";
?>