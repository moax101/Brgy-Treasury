
<html lang>
<head>
    <title>Barangay System</title>
    <link rel="stylesheet" type="text/css" href="resources/css/formstyle.css">
</head>
<body>

        <div class="header">
            <h2>Login</h2>
        </div>

    <form method="post" action="#">
        <table>
                <tr>
                    <td>
                        <label>Username</label>
                    </td>
                    <td>
                        <input  name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="Password" name="pass" placeholder="Password" >
                    </td>
                </tr>
        </table>
        <p>Don't have Account? <a href="register.php">Register Here</a></p>

        <div class="input_group">
            <button type="submit" name="submit" value="submit" class="btn">Login</button>
        </div>  
    </form>
    <?php

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 //Define $user and $pass
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "login");

 if(empty($_POST['user']) || empty($_POST['pass'])){
    echo '<script language="javascript">';
    echo 'alert("Username or Password is Invalid"); window.location ="login.php";</script>';    }
    else
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];               
$query = mysqli_query($conn, "SELECT * FROM register WHERE password='$pass' AND username='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
    echo '<script language="javascript">';
    echo 'alert("login success"); window.location ="index.php";</script>';
     // Redirecting to other page
 }
 else 
 {
    echo '<script language="javascript">';
    echo 'alert("Username or Password is Invalid"); window.location ="login.php";</script>';
 }
 mysqli_close($conn); // Closing connection
 }
}
?>
</body>
</html>