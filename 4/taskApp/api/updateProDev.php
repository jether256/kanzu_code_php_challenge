<?php

header("Access-Control-Allow-Origin: *");

include('../config/config.php');

$status = mysqli_real_escape_string($con,$_POST['status']);
$dev = mysqli_real_escape_string($con,$_POST['dev']);
$id = mysqli_real_escape_string($con,$_POST['id']);

        if($_POST['dev']=='dev'){


            if($_POST['status'] !='completed'){


                 $insert="update project set status='$status' where project_id='$id'";
                $result=mysqli_query($con,$insert);

                if($result){

                    echo json_encode("Project ID $id updated to $status");

                 
                }

            }else{

                echo json_encode("Only a Project Manager can complete a project");
            }

            
        }else{

            echo json_encode("Your Are Not Allowed to created a project");
        }



   


?>