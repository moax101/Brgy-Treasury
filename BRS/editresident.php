<?php
if(isset($_POST["update"])){
 
        $db = new mysqli("localhost", "root", "", "store");
        // check connection
        if($db->connect_error) {
          die("Connection Failed : " . $db->connect_error);
        }
        
        if(empty($_POST['t2']) && empty($_POST['t3']) && empty($_POST['t4'])  && empty($_POST['t5']) && empty($_POST['t6']) && empty($_POST['t7'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET surname='".$_POST['t1']."' where brgy_id='".$_POST["update"]."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        else if(empty($_POST['t1']) && empty($_POST['t3']) && empty($_POST['t4'])  && empty($_POST['t5']) && empty($_POST['t6']) && empty($_POST['t7'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET firstname='".$_POST['t2']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t4'])  && empty($_POST['t5']) && empty($_POST['t6']) && empty($_POST['t7'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET midname='".$_POST['t3']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t5']) && empty($_POST['t6']) && empty($_POST['t7'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET bday='".$_POST['t4']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t4']) && empty($_POST['t6']) && empty($_POST['t7'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET sex='".$_POST['t5']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t4']) && empty($_POST['t5']) && empty($_POST['t7'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET status='".$_POST['t6']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }        
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t4']) && empty($_POST['t5']) && empty($_POST['t6'])  && empty($_POST['t8']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET brgy='".$_POST['t7']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }        
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t4']) && empty($_POST['t5']) && empty($_POST['t6'])  && empty($_POST['t7']) && empty($_POST['t9']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET district='".$_POST['t8']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }        
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t4']) && empty($_POST['t5']) && empty($_POST['t6'])  && empty($_POST['t7']) && empty($_POST['t8']) && empty($_POST['t10'])){
            $insert = $db->query("UPDATE resident SET purok='".$_POST['t9']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }        
        else if(empty($_POST['t1']) && empty($_POST['t2']) && empty($_POST['t3'])  && empty($_POST['t4']) && empty($_POST['t5']) && empty($_POST['t6'])  && empty($_POST['t7']) && empty($_POST['t8']) && empty($_POST['t9'])){
            $insert = $db->query("UPDATE resident SET city='".$_POST['t10']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }        
        
        else{
            $insert = $db->query("UPDATE transaction SET surname='".$_POST['t1']."',firstname='".$_POST['t2']."',midname='".$_POST['t3']."',bday='".$_POST['t4']."',sex='".$_POST['t5']."',status='".$_POST['t6']."',brgy='".$_POST['t7']."',district='".$_POST['t8']."',purok='".$_POST['t9']."',city='".$_POST['t10']."' where brgy_id='".$_POST["update"]."'  ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        //Insert image content into database
    
}  
?>