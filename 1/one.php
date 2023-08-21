<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Question 1:</h1><br><br><br>
Given an array of numbers from 0 to 100, sort the array and return an array of fibonacci
numbers starting from the seventh number.<br>
The array should be sorted in descending order.<br>




<?php

$fin=array(0,1);//fibonacci sequency starts with 0 and  1 then the third number is the sum of the previous two numbers

$fin[2]=$fin[0]+$fin[1];

//to contiue with the addition app to 100 we use a loop

for ($i=2; $i <=100 ; $i++) { 

	$fin[$i]=$fin[$i-1]  + $fin[$i-2];
	// code...
}




$new=[];//empty array to add values starting from the seventh number


foreach ($fin as $key => $value) {//loop through the $fin array

	if ($key >= 6) {
		
		$new[]=[$value];
	}
	// code...
}


rsort($new);//reverse the array in descending array


echo var_dump($new);//desired array

?>

</body>
</html>