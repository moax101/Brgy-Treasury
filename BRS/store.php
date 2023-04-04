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
        $t1 = $_POST['t1'];
        $t2=$_POST['t2'];
        $t3 = $_POST['t3'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
        $status=$_POST['status'];
        $brgy = $_POST['brgy'];
        $dist = $_POST['dist'];
        $purok=$_POST['purok'];
        $city = $_POST['city'];
        //Insert image content into database
        $insert = $db->query("INSERT into resident (surname,firstname,midname,bday,sex,status,brgy,district,purok,city) VALUES (    '$t1','$t2','$t3','$date','$gender','$status','$brgy','$dist','$purok','$city')");
        if($insert){
            echo '<script language="javascript">';
            echo 'alert("Registration Success"); window.location ="registerresident.php";</script>';   


        }        mysqli_close($db); // Closing connection 
    }
?>