<?php 
$db_con = mysqli_connect("localhost", "root", '', "student");
    
    $id = ($_POST['id']);
    $st = ($_POST['state']==0?1:0);
    $query = "UPDATE `student_info` SET `state`='$st' WHERE `id`= $id";
   
  	if (mysqli_query($db_con,$query)) {        
        echo json_encode(array("abc"=>"$st"));  	
  	}else{
        echo json_encode(array("abc"=>'error'));
    }
    
    