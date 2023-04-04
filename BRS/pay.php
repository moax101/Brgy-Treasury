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
            </ul>  
    </ul>
</div>

    <!-- MAIN CONTENT -->
    <div id="container">
            <div class="row">

                <div class="col-2">
                </div>
                <div class="col-4">
                            <h2>Barangay Clearance</h2>
                            <div class="fill" >
                                <form class="#" method="post">
                                        <table >
                                        <tr>
                                            <td>
                                                <label for="residentId">Resident ID:</label>
                                            </td>
                                            <td>
                                            <?php 
$conn = mysqli_connect("localhost", "root", "", "store");
       if($conn ->connect_error){
            die("Connection failed:" . $conn-> connect_error);
        }
        $sql = " SELECT * from resident where brgy_id='".$_POST["pays"]."' ";
        $result = $conn->query($sql);
        if($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
                        echo "<form action='payments.php' method='POST'>"; 
                        echo "<p name='brgy' value=".$row['brgy_id'].">".$row['brgy_id']."</p>"; 
                        echo "</td>
                                </tr>
                                <tr>
                                        <td>
                                            <label>Surname:</label>
                                        </td>
                                        <td>";  
                        echo "<p name='sname'>".$row['surname']."</p>"; 
                        echo "</td>
                                </tr>
                                <tr>
                                    <td>
                                            <label for='bday'>Transaction </label>
                                        </td>
                                    <td>
                                            <p name='brgytr' value='clearance'>Barangay Clearance</p> 
                                </td>
                                </tr>
                                <tr>
                                        <td>
                                <label for='sname'>Payment:</label>
                                    </td>
                                        <td>
                                        <input type='number' name='pay' placeholder=''>
                                            </td>
                                            </tr>

                                        </table>
                            </div>  
                            <button id='myBtn' class='btn btn-theme' type='submit' name='submit'>Pay</button>
                            </form>";
                        }
                        $conn-> close();
                    }
             
             ?>
                </div>
                </div>
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

        <!-- Script for modal -->
        <script>
                // Get the modal
                var modal = document.getElementById('myModal');
                
                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");
                
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];
                
                // When the user clicks the button, open the modal 
                btn.onclick = function() {
                    modal.style.display = "block";
                }
                
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
        </script>
                
        
                
</body>
</html>