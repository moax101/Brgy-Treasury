<?php
if(isset($_POST["submit"])){
        //DB details
        $db = new mysqli("localhost", "root", "", "store");
        // check connection
        if($db->connect_error) {
          die("Connection Failed : " . $db->connect_error);
        } else {
          // echo "Successfully connected";
        }

          $t3 = $_POST['pay'];
          if(empty($t3)){
          echo '<script language="javascript">';
          echo 'alert("Payment not register"); window.location ="ViewResident.php";</script>';   
        }else{
          $t1 = $_POST['submit'];
          $t2 = $_POST['brgy'];
          $t3 = $_POST['pay'];
          $t4 ="Pending";
          $date = date ("Y-m-d H-i:s");
          
          $mysqli = new mysqli('localhost','root','','store');
            if($mysqli->connect_errno){
              echo "failed to connect to mysql: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
            }

          if(!$mysqli->query("DROP TRIGGER IF EXISTS trig1") || !$mysqli->query("CREATE TRIGGER trig1 before insert on
           payment1 for each row insert into trigger_time(brgy_id, exec_time)
           values ( '$t1', '$date');" ) ){
             echo "Trigger failed : (" . $mysqli->errno . ") " . $mysqli->error;
           }
 
          $insert = $db->query("INSERT into payment1 (brgy_id,transaction1,payment1,pending1) VALUES ('$t1','$t2','$t3','$t4')");
          
          if($insert){ 
            echo '<script language="javascript">';
              echo 'alert("Transaction Success"); window.location ="ViewResident.php";</script>';
                      
        }
      }
        mysqli_close($db); // Closing connection 
    }


    if(isset($_POST["submit2"])){
      //DB details
      $db = new mysqli("localhost", "root", "", "store");
      // check connection
      if($db->connect_error) {
        die("Connection Failed : " . $db->connect_error);
      } else {
        // echo "Successfully connected";
      }
      $t3 = $_POST['pay'];
      if(empty($t3) ){
      echo '<script language="javascript">';
      echo 'alert("Payment not register"); window.location ="ViewResident.php";</script>';   
    }else{
      $t1 = $_POST['submit2'];
      $t2 = $_POST['brgy'];
      $t3 = $_POST['pay'];
      $t4 ="Pending";
      $date = date ("Y-m-d H-i:s");
      
      $mysqli = new mysqli('localhost','root','','store');
        if($mysqli->connect_errno){
          echo "failed to connect to mysql: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
        }

      if(!$mysqli->query("DROP TRIGGER IF EXISTS trig2") || !$mysqli->query("CREATE TRIGGER trig2 before insert on
       payment2 for each row insert into trigger_time2(brgy_id, exec_time)
       values ( '$t1', '$date');" ) ){
         echo "Trigger failed : (" . $mysqli->errno . ") " . $mysqli->error;
       }

      //Insert image content into database
      $insert = $db->query("INSERT into payment2 (brgy_id,transaction2,payment2,pending2) VALUES ('$t1','$t2','$t3','$t4')");
      if($insert){
          echo '<script language="javascript">';
          echo 'alert("Transaction Success"); window.location ="ViewResident.php";</script>';   
    }
 
      }        mysqli_close($db); // Closing connection 
  }








  if(isset($_POST["submit3"])){
    //DB details
    $db = new mysqli("localhost", "root", "", "store");
    // check connection
    if($db->connect_error) {
      die("Connection Failed : " . $db->connect_error);
    } else {
      // echo "Successfully connected";
    }
    $t3 = $_POST['pay'];
    if(empty($t3)){
    echo '<script language="javascript">';
    echo 'alert("Payment not register"); window.location ="ViewResident.php";</script>';   
  }else{
    $t1 = $_POST['submit3'];
    $t2 = $_POST['brgy'];
    $t3 = $_POST['pay'];
    $t4 ="Pending";
    $date = date ("Y-m-d H-i:s");
    
    $mysqli = new mysqli('localhost','root','','store');
      if($mysqli->connect_errno){
        echo "failed to connect to mysql: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
      }

    if(!$mysqli->query("DROP TRIGGER IF EXISTS trig3") || !$mysqli->query("CREATE TRIGGER trig3 before insert on
     payment3 for each row insert into trigger_time3(brgy_id, exec_time)
     values ( '$t1', '$date');" ) ){
       echo "Trigger failed : (" . $mysqli->errno . ") " . $mysqli->error;
     }

    //Insert image content into database
    $insert = $db->query("INSERT into payment3 (brgy_id,transaction3,payment3,pending3) VALUES ('$t1','$t2','$t3','$t4')");
    if($insert){
        echo '<script language="javascript">';
        echo 'alert("Transaction Success"); window.location ="ViewResident.php";</script>';   
  }
}        mysqli_close($db); // Closing connection 
}
?>