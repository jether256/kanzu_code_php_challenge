<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	Question 2:<br><br>
The paragraph below has an email address, phone number and url.
$paragraph = “This is a paragraph and it has to find 256781123456, testemail@gmail.com
and https://kanzucode.com/”
A. Create three (3) separate functions that return the email address, phone number
and url using regular expressions (regex).
B. Create three (3) separate functions that return the email address, phone number
and url without using regular expressions (regex)<br><br><br>

	<?php


class Para{




	//get email usingregex expressions
	public function getEm($s){

		$ma=[];

		$pattern="/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i";
		preg_match_all($pattern,$s, $ma);

	$k=implode("",$ma[0]);

	return $k;
	}






	//get url using reg expressions
	public function getUr($s){

		$ma=[];

		$pattern="#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#";

		preg_match_all($pattern,$s,$ma);

		$j=implode("",$ma[0]);


		return $j;


	}



	//get phone number using reg expressions
	public function getNu($s){

		$ma=[];

		$pattern="/\d+/";

		preg_match_all($pattern,$s,$ma);

		$j=implode("",$ma[0]);


		return $j;


	}




	//get phone number without using regex
	public function getPhone($s){

		$str=str_Split($s);

		$new=[];

		foreach ($str as $key => $value) {

			if(intval($value)){

				$new[]=$value;
			}
			// code...
		}


	$k=implode("",$new);

	return $k;

	}





	//get url with using regex
	public function getUrl($s){

		$arr=explode("and",$s);


		$new=[];

		foreach ($arr as $key => $value) {

			if($key==2){

				$new[]=$value;
			}
			// code...
		}


		$k=implode("",$new);

		return $k;


	}


	//get Email without regex expressions
	public function getEmail($s){

		$arr=explode(",",$s);
		$new=[];

		foreach ($arr as $key => $value) {


		if ($key==1) {

			$new[]=$value;
			// code...
		}
			// code...
		}


		$em=implode("",$new);
		$arr2=explode("and",$em);

		$new2=[];
	


			foreach ($arr2 as $key => $value) {

				if($key==0){

					$new2[]=$value;
				}
				// code...
			}


		$em2=implode("",$new2);

		return $em2;


	}


}


$s="This is a paragraph and it has to find 256781123456, testemail@gmail.com
and https://kanzucode.com/";

$or= new Para();


echo $or->getEm($s);//get email with regx expressions
echo "<br>";
echo "<br>";
echo "<br>";


echo $or->getUr($s);//get web url with regx expressions
echo "<br>";
echo "<br>";
echo "<br>";


echo $or->getNu($s);//get number with regx expressions
echo "<br>";
echo "<br>";
echo "<br>";




echo $or->getPhone($s);//get phone number without regx expressions
echo "<br>";
echo "<br>";
echo "<br>";

echo $or->getUrl($s);//get email without regx expressions
echo "<br>";
echo "<br>";
echo "<br>";

echo $or->getEmail($s);//get email without regx expressions
echo "<br>";
echo "<br>";
echo "<br>";



	?>

</body>
</html>