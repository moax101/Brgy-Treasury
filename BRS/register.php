
<html>
<head>
    <title>Barangay System</title>
    <link rel="stylesheet" type="text/css" href="resources/css/formstyle.css">
</head>
<body>
    <div class="header">
    <h2>Register</h2>
    </div>
    
    <form method="post" action="#">
        <table>
            <tr>
                <td>
                <label>Username</label>
                <input type="text" name="user" >
                </td>
            </tr>
            <tr>
            <td>
                <label>Password</label>
                <input type="text" name="pass">
                </td>
            </tr>
            <td>
        </table>
        <p>
                Already a member? <a href="login.php">Log in</a>
            </p>

        <div class="input_group">
        <button type="submit" name="submit" value="submit" class="btn">Sign Up</button>
                </div>  
    </div>
</form>
<?php
if(isset($_POST["submit"])){
        $db = new mysqli("localhost", "root", "", "login");
        // check connection
        if($db->connect_error) {
          die("Connection Failed : " . $db->connect_error);
        } else {
          // echo "Successfully connected";
        }
                
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        if(empty($_POST['user']) || empty($_POST['pass'])){
            echo '<script language="javascript">';
            echo 'alert("Username or Password is Invalid"); window.location ="register.php";</script>';       

        }
            else
            {
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                          
        //Insert image content into database
        $insert = $db->query("INSERT into register (username,password) VALUES ('$user','$pass')");
        if($insert){
            echo '<script language="javascript">';
            echo 'alert("Register is success"); window.location ="login.php";</script>';       
         }
         else if($rows == 0)
        {
        $error = "Username of Password is Invalid";
        }
        
    }
}
?>        

</body>
</html>