<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type ="text/css" href="resources/css/style.css">
    <link rel ="stylesheet" type ="text/css" href="resources/css/style-responsive.css">
    <title>Barangay Treasury System</title>
</head>
<body>

    <div id="main-header">
            <h1>BARANGAY TREASURY</h1>
    </div>
    
    <!-- NAVIGATION PANEL -->
    <div id="nav-panel">
        <ul>
                <ul>
                    <li class="dropdown">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#javascript:void(0)" class="dropbtn" onclick="myFunction()">Residents</a>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="viewResident.php">View list of People</a>
                            <a href="registerResident.php">Add new Resident</a>
                        </div>
                    </li>
                    <li class="dropdown2">
                        <a href="#javascript:void(0)" class="dropbtn2" onclick="myFunction2()">Records</a>
                        <div class="dropdown-content2" id="myDropdown2">
                            <a href="history.php">Brgy Clearance</a>
                            <a href="history2.php">Brgy Certificate</a>
                            <a href="history3.php">Cedula</a>
                        </div>
                    </li>
                    <li class="dropdown">
                            <a href="transaction.php">Transaction</a>
                    </li>

                </ul>  
        </ul>
    </div>




    <!-- MAIN CONTENT -->
    <div id="container">
            <div class="row">


            <div class="col-2">
            </div>
                
            <div class="col-8">
                            <h2 align="center">List of all Residents</h2>
                            
                            <div class="form1">
                            <table class="resident-list">
                                      <thead>
                                        <tr>
                                          <th>SURNAME</th>
                                          <th>STATUS</th>
                                          <th>BRGY</th>
                                          <th>TRANSACTION</th>
                                          <th>PAYMENT</th>
                                          <th>TIME</th>
                                          <th>STATUS</th>
                                          <th>UPDATE</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                      <?php 
                        $conn = mysqli_connect("localhost", "root", "", "store");
                            if($conn ->connect_error){
                                    die("Connection failed:" . $conn-> connect_error);
                                }
                                $sql = " SELECT * from history ";
                                $sth = $conn->query($sql);
                                while ($row = mysqli_fetch_array($sth)) {   
                                    echo "<tr><td>". $row["surname"]. "</td><td>". $row["status"]. "</td><td>". $row["brgy"]. "</td><td>" . $row["transaction1"]."</td><td>". $row["payment1"]."</td><td>". $row["exec_time"]. "</td><td>". $row["pending1"]. "</td><td> <form method='POST' action='#'>
                                    <button  name='update' value=".$row['surname'].">Update</button></form>" ;
                            }
                            echo "</table>";   
                                
                            $conn-> close();
                            ?>
                            <?php
                                    if(isset($_POST["update"])){
 
                                        $db = new mysqli("localhost", "root", "", "store");
                                        // check connection
                                        if($db->connect_error) {
                                          die("Connection Failed : " . $db->connect_error);
                                        }
                                        $sql = " SELECT * from history ";
                                        $sth = $db->query($sql);
                                        while ($row = mysqli_fetch_array($sth)) { 
                                        if($row['pending1']=="Pending") {                                          
                                            $insert = $db->query("UPDATE payment1 SET pending1='Already Taken' ");
                                            if($insert){
                                                header("location:history.php");
                                    
                                            } 
                                        }else
                                        {                                          
                                            $insert = $db->query("UPDATE payment1 SET pending1='Pending' ");
                                            if($insert){
                                                header("location:history.php");
                                    
                                            } 
                                        }
                                    }
                                        }
                            
                            ?>

                                      </tbody>
                                    </table>
                            </div>
            </div>

            <div class="col-2">
            </div>

    <div id="footer">
            BrgyTreasury
    </div>
        <!-- Script for navigation panel -->
        <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                function myFunction2() {
                    document.getElementById("myDropdown2").classList.toggle("show");
                }
                function myFunction3() {
                    document.getElementById("myDropdown3").classList.toggle("show");
                }
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(e) {
                if (!e.target.matches('.dropbtn')) {
                
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    for (var d = 0; d < dropdowns.length; d++) {
                    var openDropdown = dropdowns[d];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
    
                if (!e.target.matches('.dropbtn2'))
                {
                    var dropdowns = document.getElementsByClassName("dropdown-content2");
                    for (var d = 0; d < dropdowns.length; d++) {
                    var openDropdown = dropdowns[d];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
                }
                if (!e.target.matches('.dropbtn3'))
                {
                    var dropdowns = document.getElementsByClassName("dropdown-content3");
                    for (var d = 0; d < dropdowns.length; d++) {
                    var openDropdown = dropdowns[d];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                    }
    
                }
            
                }
        </script>
                
</body>
</html>