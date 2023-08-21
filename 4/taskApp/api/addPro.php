<?php

header("Access-Control-Allow-Origin: *");

include('../config/config.php');

$nem = mysqli_real_escape_string($con,$_POST['name']);
$pro_n = mysqli_real_escape_string($con,$_POST['pro_n']);
$de = mysqli_real_escape_string($con,$_POST['dev']);



$proid =rand(10000,10000000000);



        if($_POST['dev']=='dev'){

             $insert="insert into project(name,pro_name,status,project_id) 
                values('$nem','$pro_n','awaiting-start','$proid')";
                $result=mysqli_query($con,$insert);

                if($result){

                    echo json_encode("Project ID $proid Added Successfully");

                 
                }

        }else{

            echo json_encode("Your Are Not Allowed to created a project");
        }



   


?>