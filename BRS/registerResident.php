<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" type ="text/css" href="resources/css/style.css">
    <link rel ="stylesheet" type ="text/css" href="resources/css/style-responsive.css">
    <title>Inventory</title>
</head>
<body>

    <div id="main-header">
            <h1>Inventory</h1>
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
                <div class="col-4">
                            <h2>Register new Ingredients</h2>
                            <div class="fill">
                                    <form class="#" action="store.php" method="POST" autocomplete="on">
                                        <table >
                                        <tr>
                                                <td>
                                                    <label for="sname">Surname:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="t1" maxlength="50" placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="fname">Firstname:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="t2" maxlength="50" placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="mname">Middlename:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="t3" maxlength="50" placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="bday">Birthday: </label>
                                                </td>
                                                <td>
                                                    <input type="date" name="date">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="sex" name="gender">Sex:</label>
                                                </td>
                                                <td>
                                                    <input type="radio" name="gender" value="male" checked> Male
                                                    <input type="radio" name="gender" value="female"> Female<br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="sex" name="status">Status:</label>
                                                </td>
                                                <td>
                                                    <select name="status">
                                                        <option name="status" value="student">Student</option>
                                                        <option name="status" value="single">Single</option>
                                                        <option name="status" value="married">Married</option>
                                                        <option name="status" value="widow">Widow</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                            </div>  
                            
                         
                </div>

                <div class="col-4">
                        <div class="fill">
                        <br>
                                    <table >
                                        <tr>
                                            <td>
                                                <label for="brgy">Barangay:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="brgy" maxlength="50" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="dist" >District:</label>
                                            </td>
                                            <td>
                                                <select name="dist">
                                                        <option name="dist" value="District 1">District 1</option>
                                                        <option name="dist" value="District 2">District 2</option>
                                                        <option name="dist" value="District 3">District 3</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label name="purok" for="purok">Purok:</label>
                                            </td>
                                            <td>
                                                <select name="purok">
                                                <option name="purok" value="Purok 1">Purok 1</option>
                                                    <option name="purok" value="Purok 2">Purok 2</option>
                                                    <option name="purok" value="Purok 3">Purok 3</option>
                                                    <option name="purok" value="Purok 4-A">Purok 4-A</option>
                                                    <option name="purok" value="Purok 4-B">Purok 4-B</option>
                                                    <option name="purok" value="Purok 4-C">Purok 4-C</option>
                                                    <option name="purok" value="Purok 5-A">Purok 5-A</option>
                                                    <option name="purok" value="Purok 5-B">Purok 5-B</option>
                                                    <option name="purok" value="Purok 6">Purok 6</option>                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="city">City:</label>
                                            </td>
                                            <td>
                                                <input type="text" name="city" maxlength="50" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                	                     
                                        </tr> 
                                    </table>
                              
                            <button id="myBtn" class="btn btn-theme" type="submit" name="submit">Save</button>
                        </div>
			</form>                         
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