<?php
if(isset($_POST["update"])){
 
        $db = new mysqli("localhost", "root", "", "store");
        // check connection
        if($db->connect_error) {
          die("Connection Failed : " . $db->connect_error);
        }
        
        if(empty($_POST['single']) && empty($_POST['widow']) && empty($_POST['married'])){
            $insert = $db->query("UPDATE transaction SET student='".$_POST['stud']."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
    
        }else if(empty($_POST['stud']) && empty($_POST['widow']) && empty($_POST['married'])){
            $insert = $db->query("UPDATE transaction SET single='".$_POST['single']."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
            
        }else if(empty($_POST['single']) && empty($_POST['stud']) && empty($_POST['married'])){
            $insert = $db->query("UPDATE transaction SET widow='".$_POST['widow']."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        else if(empty($_POST['single']) && empty($_POST['stud']) && empty($_POST['widow'])){
            $insert = $db->query("UPDATE transaction SET married='".$_POST['married']."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }else{
            $insert = $db->query("UPDATE transaction SET single='".$_POST['single']."',student='".$_POST['stud']."',widow='".$_POST['widow']."',married='".$_POST['married']."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
        }
        //Insert image content into database
    }
    if(isset($_POST["update2"])){
 
        $db = new mysqli("localhost", "root", "", "store");
        // check connection
        if($db->connect_error) {
          die("Connection Failed : " . $db->connect_error);
        }
        
            $insert = $db->query("UPDATE transaction SET clearance='".$_POST['clear']."' ");

            if($insert){
                header("location:viewResident.php");
    
            }else{
                echo "File upload failed, please try again.";
            } 
    
        }
        if(isset($_POST["update3"])){
 
            $db = new mysqli("localhost", "root", "", "store");
            // check connection
            if($db->connect_error) {
              die("Connection Failed : " . $db->connect_error);
            }
            
                $insert = $db->query("UPDATE transaction SET certificate='".$_POST['certif']."' ");
    
                if($insert){
                    header("location:viewResident.php");
        
                }else{
                    echo "File upload failed, please try again.";
                } 
        
            }
    
?>