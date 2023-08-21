<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	Question 3:<br><br>
Create a file and name it test-file.txt, add the following text to the file:
$text = “This is a test file with some dummy text. This text file is small! It’s also very brief,
do you want to add some more text to it?”
A. Write a function that reads the text from the file and returns an array without any
duplicate items.
B. Write a function that reads the text from the file and returns an array with only the
punctuation marks.

	<?php

	class Textt{



		///reads file and returns an array with no duplicates
		public function NoDup(){

			// 	$filename = 'test-file.txt';
			// 	$f = fopen($filename, 'r');

			// if ($f) {
			// 	    $contents = fread($f, filesize($filename));
			// 	    fclose($f);
			// 	    return $contents;
			// 	}

			$section = file_get_contents('test-file.txt');//read file contents
			$str=str_split($section);//turn into an array
			$k=array_unique($str);//remove duplicate caharacters
			var_dump($k);//array without duplicate characters
		}


		//returns an array with only punction marks
		public function onlyPun(){

			$section = file_get_contents('test-file.txt');//read file contents
			$str=str_split($section);// turn string into an array

			$new=[];//new array to pass only punctuation characters
			

			foreach ($str as $key => $value) {//loop through array

				if (ctype_punct($value)){// if characters found put in the new array

			        $new[]=$value;
			   }
				
			}

			return var_dump($new); //return array of paunctuation characters
		}




	}

$myfile = fopen("test-file.txt", "w");
$txt="This is a test file with some dummy text. This text file is small! It’s also very brief,
do you want to add some more text to it?";
fwrite($myfile, $txt);


$or= new Textt();

echo "<br>";
echo "<br>";

echo $or->NoDup();//return array with not duplicates
echo "<br>";
echo "<br>";
echo "<br>";


echo $or->onlyPun();//return array with only pauntuation marks
echo "<br>";
echo "<br>";
echo "<br>";
	





	?>

</body>
</html>