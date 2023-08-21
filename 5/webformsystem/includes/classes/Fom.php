<?php

class Fom{

	
	private $con;
	private $user_obj;

	public function __construct($con,$user){
		$this->con=$con;
		$this->user_obj= new User($con,$user);
	}




	public function postForm($org_nem,$loc,$fnem,$lnem,$age,$kid,$mar,$tv,$rad,$car,$pa,$ma){


		$uid=$this->user_obj->getUsername();

		$org_nem = $_POST['org_nem'];
		$loc =  $_POST['loc'];
		$fnem =  $_POST['f_nem'];
		$lnem =  $_POST['l_nem'];
		$age =  $_POST['age'];
		$kid = $_POST['children'];
		// $mar = mysqli_real_escape_string($this->con, $mar);
		// $tv = mysqli_real_escape_string($this->con, $tv);
		// $rad = mysqli_real_escape_string($this->con, $rad);
		// $car = mysqli_real_escape_string($this->con, $car);
		$pa = $_POST['fa_nem'];
		$ma =  $_POST['ma_nem'];


		if(isset($_POST['married'])){

		$mar = $_POST['married'];
		}else{

			$mar='no';
		}



		if(isset($_POST['tv'])){

		$tv = $_POST['tv'];
		}else{

			$tv='no';
		}


		if(isset($_POST['rad'])){

			$rad =  $_POST['rad'];
		}else{

			$rad='no';
		}


		if(isset($_POST['car'])){

			$car =$_POST['car'];
		}else{

			$car='no';
		}


			$rand_num =rand(10000,10000000000);

			$x="JB";
			$r=$x.''.$rand_num;


			$date = date("Y-m-d H:i:s"); 





      // $stmt = $conn->prepare( "INSERT INTO `cus_survey` ( `name`, `paygoid`, `product_exist_satisfaction`, `system_battery_runout`, `rank_appliances` )  VALUES (?, ?, ?, ?, ?)" );
      //   $stmt->bind_param("sssss", $name, $paygoid, $product_exist_satisfaction, $system_battery_runout, $checkboxvalue );
      //   $stmt->execute();


			

			$insert=mysqli_query($this->con,"INSERT INTO form_data VALUES('','$uid','$org_nem','$loc','$fnem','$lnem','$age','$kid','$mar','$tv','$rad','$car','$pa','$ma','$r','$date')");

			if($insert){

	        header("Location:forms.php");
			}



	}




	public function getForms(){

		$uid=$this->user_obj->getUsername();

		$all= "";

		$i=0;

		$query=mysqli_query($this->con,"SELECT * FROM form_data WHERE username='$uid' ORDER BY ID DESC");
		while ($row=mysqli_fetch_array($query)) {

			$i++;

			$id=$row['ID'];
			$user=$row['username'];
			$org=$row['organisation'];
			$loc=$row['location'];
			$fnem=$row['f_nem'];
			$lnem=$row['l_nem'];
			$age=$row['age'];
			$kids=$row['kids'];
			$mar=$row['mary'];
			$tv=$row['tv'];
			$rad=$row['radio'];
			$car=$row['car'];
			$pa=$row['father'];
			$ma=$row['mother'];
			$fo=$row['formID'];
			$date=$row['date'];


			$all .= "
										<tr>
										<th scope='row'>$i</th>
                        <td>$fo</td>
                        <td>$org</td>
                        <td>$fnem $lnem</td>
                        <td>$user</td>
                        <td><a href='edit_form.php?fomid=$id' class='btn btn-outline-success'>Edit</a></td>
                       
                      </tr>
			";
					// code...
		}


		return $all;

	}



	public function upDateForm($org_nem,$loc,$fnem,$lnem,$age,$kid,$mar,$tv,$rad,$car,$pa,$ma,$fomid){


			$uid=$this->user_obj->getUsername();

		$org_nem = $_POST['org_nem'];
		$loc =  $_POST['loc'];
		$fnem =  $_POST['f_nem'];
		$lnem =  $_POST['l_nem'];
		$age =  $_POST['age'];
		$kid = $_POST['children'];
		$pa = $_POST['fa_nem'];
		$ma =  $_POST['ma_nem'];
		$fomid=$fomid;


		if(isset($_POST['married'])){

		$mar = $_POST['married'];
		}else{

			$mar='no';
		}



		if(isset($_POST['tv'])){

		$tv = $_POST['tv'];
		}else{

			$tv='no';
		}


		if(isset($_POST['rad'])){

			$rad =  $_POST['rad'];
		}else{

			$rad='no';
		}


		if(isset($_POST['car'])){

			$car =$_POST['car'];
		}else{

			$car='no';
		}



		$query=mysqli_query($this->con,"UPDATE form_data SET organisation='$org_nem',location='$loc',f_nem='$fnem',l_nem='$lnem',age='$age',kids='$kid',mary='$mar',tv='$tv',radio='$rad',car='$car',father='$pa',mother='$ma' WHERE ID='$fomid'");

		if($query){

		    header("Location:form_list.php");
		}


	}



	public function delForm($id){

		$id=$id;

		$query=mysqli_query($this->con,"DELETE FROM form_data WHERE ID=$id");

		if($query){

			header("Location:form_list.php");
		}
	}


}



















?>