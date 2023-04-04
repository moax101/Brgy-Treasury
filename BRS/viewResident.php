<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type ="text/css" href="resources/css/style.css">
    <link rel ="stylesheet" type ="text/css" href="resources/css/style-responsive.css">
    <script src= "showHide.js" ></script>
    <title>Inventory</title>
</head>
<body>

    <div id="main-header">
            <h1>Ingredients Inventory</h1>
    </div>
    
   
     <!-- NAVIGATION PANEL -->
     <div id="nav-panel">
        <ul>
                <ul>
                    <li class="dropdown">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#javascript:void(0)" class="dropbtn" onclick="myFunction()">Recipe</a>
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

                </ul>  
        </ul>
     </div>




    <!-- MAIN CONTENT -->
    <div id="container">    
            <div class="row">

                <div class="col-6">
                            <h2>List of all Ingredients</h2>
                            
                            <div class="form1">
                                    <table class="resident-list">
                                      <thead>
                                        <tr>
                                          <th>ID</th>
                                          <th>Ingredient Name</th>
                                          <th>Stocks</th>
                                          <th>Price</th>
                                          <th>Total PRice</th>
                                          <th>STATUS</th>
                                        </tr>
                                    </thead>
                                      <tbody>
                                        <?php 
                                              $conn = mysqli_connect("localhost", "root", "", "store");
                                              if($conn ->connect_error){
                                                      die("Connection failed:" . $conn-> connect_error);
                                                  }
                                                      $result = $conn-> query("CALL viewall");
                                                  if($result-> num_rows > 0){
                                                  while($row = $result-> fetch_assoc()){
                                                      echo "<tr><td>" . $row["brgy_id"] .  "</td><td>". $row["surname"]. "</td><td>". $row["firstname"]. "</td><td>". $row["midname"]. "</td><td>" . $row["purok"]. "</td><td> <form method='POST' action='#'>
                                                      <button  name='show' value=".$row['brgy_id'].">Show</button><button  name='update' value=".$row['brgy_id'].">update</button></form>" ;
                                                  }
                                                  echo "</table>";   
                                                  
                                                  }
                                                  else {
                                              }
                                              $conn-> close();      
                                        ?>
                                        <?php 
                                            if(isset($_POST["delete"])){
                                                $conn = mysqli_connect("localhost", "root", "", "store");
                                                if($conn ->connect_error){
                                                    die("Connection failed:" . $conn-> connect_error);
                                                }
                                                $sql = " DELETE from resident where brgy_id='".$_POST["delete"]."' ";
                                                    $sth = $conn->query($sql);
                                                    $conn-> close();
                                                    header("Refresh:0");
                                                }    
                                        ?>
                                        </tbody>
                                        </table>
                            </div>
                </div>
                <div class="col-6 centered" >
                        <h2 align="center">Quick Preview</h2>
                       
                        <div class="fill">
                            <h4 class="fill1">Personal information</h4>
                            <?php
                            if(isset($_POST["show"])){
                                    $conn = mysqli_connect("localhost", "root", "", "store");
                                    if($conn ->connect_error){
                                         die("Connection failed:" . $conn-> connect_error);
                                     }
                                       $sql = " SELECT * from resident where brgy_id='".$_POST["show"]."' ";
                                           $sth = $conn->query($sql);
                                           while ($row = mysqli_fetch_array($sth)) {
                                echo "<table>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <label align='center'>Surname:</label>
                                            </td>
                                            <td>";
                                echo    "<p align='left'>".$row['surname']."</p>"; 
                                echo    "</td>
                                        </tr>
                                        <tr>
                                        <td>
                                        </td>
                                            <td>
                                                <label align='center'>Firstname:</label>
                                            </td>
                                            
                                            <td>";
                                            echo "<p align='left'>".$row['firstname']."</p>";
                                            echo "</td>
                                            </tr>
                                        <tr>
                                        <td>
                                        </td>
                                            <td>
                                                <label align='center'>Middlename:</label>
                                            </td>
                                            <td>";
                                            echo "<p align='left'>".$row['midname']."</p>";
                                            echo "</td>
                                            </tr>
                                        <tr>
                                        
                                        <td>
                                        </td>
                                            <td>
                                                <label align='center'>Birthday: </label>
                                            </td>
                                            <td>";
                                            echo "<p align='left'>".$row['bday']."</p>";
                                            echo "</td>
                                        </tr>
                                        <tr>
                                        <td>
                                        </td>
                                            <td>
                                                <label align='center'>Sex:</label>
                                            </td>
                                            <td>";
                                            echo "<p align='left'>".$row['sex']."</p>";
                                            echo "</td>
                                            </tr>
                                    </table>
                            <h4 class='fill1'>Address</h4>
                                    <table>
                                        <tr>
                                        <td>
                                        <label label align='center'>Barangay:</label>
                                    </td>
                                    <td>";
                                    echo "<p align='left'>".$row['brgy']."</p>";
                                    echo "</td>
                                    </tr>
                                        <tr>
                                            <td>
                                                <label label align='center'>Purok:</label>
                                            </td>
                                            <td>";
                                            echo "<p align='left'>".$row['purok']."</p>";
                                            echo "</td>
                                            </tr>
                                        <tr>
                                            <td>
                                                <label label align='center'>City:</label>
                                            </td>
                                            <td>";
                                            echo "<p align='left'>".$row['city']."</p>";
                                            echo "</td>
                                            </tr>
                                    </table>";

                                    echo "<h4 class='fill1'>Transaction</h4>
                                    <table>

                                        <tr>
                                        <form action='payments.php' method='POST'> 
                                        <td>
                                            <select name='brgy'>
                                            <option name='brgy' value='Barangay Clearance'> Barangay Clearance</option>
                                            <select>";
                                            if($row['status']=="student"){
                                                $conn = mysqli_connect("localhost", "root", "", "store");
                                                 if($conn ->connect_error){
                                                  die("Connection failed:" . $conn-> connect_error);
                                                     }
                                                   $sql2 = " SELECT * from transaction ";
                                                     $sth2 = $conn->query($sql2);
                                                     while ($row2 = mysqli_fetch_array($sth2)) {
                                                        echo "<label>".$row2['student'].".00 Pesos</label>";
                                                    }

                                            }else if($row['status']=="single"){
                                                $conn = mysqli_connect("localhost", "root", "", "store");
                                                 if($conn ->connect_error){
                                                  die("Connection failed:" . $conn-> connect_error);
                                                     }
                                                   $sql2 = " SELECT * from transaction ";
                                                     $sth2 = $conn->query($sql2);
                                                     while ($row2 = mysqli_fetch_array($sth2)) {
                                                        echo "<label>".$row2['single'].".00 Pesos</label>";
                                                    }

                                            }
                                            else if($row['status']=="widow"){
                                                $conn = mysqli_connect("localhost", "root", "", "store");
                                                 if($conn ->connect_error){
                                                  die("Connection failed:" . $conn-> connect_error);
                                                     }
                                                   $sql2 = " SELECT * from transaction ";
                                                     $sth2 = $conn->query($sql2);
                                                     while ($row2 = mysqli_fetch_array($sth2)) {
                                                        echo "<label>".$row2['widow'].".00 Pesos</label>";
                                                    }

                                            }
                                            else if($row['status']=="married"){
                                                $conn = mysqli_connect("localhost", "root", "", "store");
                                                 if($conn ->connect_error){
                                                  die("Connection failed:" . $conn-> connect_error);
                                                     }
                                                   $sql2 = " SELECT * from transaction ";
                                                     $sth2 = $conn->query($sql2);
                                                     while ($row2 = mysqli_fetch_array($sth2)) {
                                                        echo "<label>".$row2['married'].".00 Pesos</label>";
                                                    }

                                            }
                                            echo "</td>
                                            <td>
                                            <input type='number' name='pay' placeholder=''>
                                            <button class='btn3 btn-theme03' type='submit' name='submit' value=".$row['brgy_id'].">Pay</button></form>
                                            
                                            <td>";                                        
                                    echo "</tr>
                                        <tr>
                                        <form action='payments.php' method='POST' autocomplete='on'>
                                            <td>
                                            <select name='brgy'>
                                            <option name='brgy' value='Barangay Certificate'> Barangay Certificate</option>
                                            <select>";

                                                $conn = mysqli_connect("localhost", "root", "", "store");
                                                 if($conn ->connect_error){
                                                  die("Connection failed:" . $conn-> connect_error);
                                                     }
                                                   $sql2 = " SELECT * from transaction ";
                                                     $sth2 = $conn->query($sql2);
                                                     while ($row2 = mysqli_fetch_array($sth2)) {
                                                        echo "<label>".$row2['certificate'].".00 Pesos</label>";
                                                    }

                                            
                                            echo "</td>
                                            <td>
                                            <input type='number' name='pay' placeholder=''>
                                            <button class='btn3 btn-theme03' type='submit' name='submit2' value=".$row['brgy_id'].">Pay</button></form>
                                        </tr>   
                                        <tr>
                                        <form action='payments.php' method='POST' autocomplete='on'>
                                            <td>
                                            <select name='brgy'>
                                            <option name='brgy' value='Cedula'> Cedula</option>
                                            <select>";
                                            $conn = mysqli_connect("localhost", "root", "", "store");
                                            if($conn ->connect_error){
                                             die("Connection failed:" . $conn-> connect_error);
                                                }
                                              $sql2 = " SELECT * from transaction ";
                                                $sth2 = $conn->query($sql2);
                                                while ($row2 = mysqli_fetch_array($sth2)) {
                                                   echo "<label>".$row2['clearance'].".00 Pesos</label>";
                                               }
                                            echo "</td>
                                            <td>
                                            <input type='number' name='pay' placeholder=''>
                                            <button class='btn3 btn-theme03' type='submit' name='submit3' value=".$row['brgy_id'].">Pay</button></form>
                                        </tr>   

                                    </table>
                                </form>
                        </div>
                </div>";
        }
            $conn-> close();
        }
        if(isset($_POST["update"])){
            $conn = mysqli_connect("localhost", "root", "", "store");
            if($conn ->connect_error){
                 die("Connection failed:" . $conn-> connect_error);
             }
               $sql = " SELECT * from resident where brgy_id='".$_POST["update"]."' ";
                   $sth = $conn->query($sql);
                   while ($row = mysqli_fetch_array($sth)) {
                    echo "<form action='editresident.php' method='POST'> 
        <table>
                <tr>
                    <td>
                    </td>
                    <td>
                        <label align='center'>Surname:</label>
                    </td>
                    <td>";
                    echo "<p align='left'>".$row['surname']." </p>";
                    echo "</td>
                    <td>";
                    echo "<p align='left'> <input type='text' name='t1'></p>";
                    echo "</td>
                    </tr>";
                  
                    echo"  
                </td>
                </tr>
                <tr>
                <td>
                </td>
                <td>
                <label align='center'>Firstname:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['firstname']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='text' name='t2'></p>";
            echo "</td>
            </tr>
                <tr>
                <td>
                </td>
                    <td>
                        <label align='center'>Middlename:</label>
                    </td>
                    <td>";
                    echo "<p align='left'>".$row['midname']." </p>";
                    echo "</td>
                    <td>";
                    echo "<p align='left'> <input type='text' name='t3'></p>";
                    echo "</td>
                    </tr>
                <tr>
                
                <td>
                </td>
                <td>
                <label align='center'>Birthday:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['bday']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='date' name='t4'></p>";
            echo "</td>
            </tr>
                <tr>
                <td>
                </td>
                <td>
                <label align='center'>Sex:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['sex']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='text' name='t5'></p>";
            echo "</td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                <label align='center'>Status:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['status']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='text' name='t6'></p>";
            echo "</td>
            </tr>
            </table>
    <h4 class='fill1'>Address</h4>
            <table>
                <tr>
                <td>
                        <label align='center'>Barangay:</label>
                    </td>
                    <td>";
                    echo "<p align='left'>".$row['brgy']." </p>";
                    echo "</td>
                    <td>";
                    echo "<p align='left'> <input type='text' name='t7'></p>";
                    echo "</td>
                    </tr>
                    <td>
                <label align='center'>District:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['district']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='text' name='t8'></p>";
            echo "</td>
            </tr>
                <tr>
                <td>
                <label align='center'>Purok:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['purok']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='text' name='t9'></p>";
            echo "</td>
            </tr>
                <tr>
                <td>
                <label align='center'>City:</label>
            </td>
            <td>";
            echo "<p align='left'>".$row['city']." </p>";
            echo "</td>
            <td>";
            echo "<p align='left'> <input type='text' name='t10'></p>";
            echo "</td>
            </tr>
            </table>
            <div class='col-4'></div>
                        <div class='col-4 col-offset-4'>
                            <input class='btn2 btn-theme03' type='submit' name='update' value=".$row['brgy_id'].">
                        </div> 
                        </form>
</div>

</div>";

}
$conn-> close();
}
    ?>
            </div>
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