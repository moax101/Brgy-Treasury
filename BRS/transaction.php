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
           
                <div class="col-4">
                        <div class="form">
                            <div class="fill">
                                <form class="#" action="edittransact.php" method="POST" autocomplete="on">
                                    <table >
                                        <tr>
                                            <tr>
                                                <div class="col-4 col-offset-4">
                                                    <td>
                                                        <h3>BARANGAY CLEARANCE:<h3>
                                                    </td>
                                                </div>
                                            <tr>
                                                <td>
                                                    <label align='right'>Student:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="stud" maxlength="50" placeholder="Amount">
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>
                                                    <label align='right'>Single:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="single" maxlength="50" placeholder="Amount">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label align='right'>Widow:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="widow" maxlength="50" placeholder="Amount">
                                                </td>
                                            </tr>       
                                            <tr>
                                                <td>
                                                    <label align='right'>Married:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="married" maxlength="50" placeholder="Amount">
                                                </td>
                                            </tr>              
                                        </tr>
                                    </table>
                                          
                            </div> 
                        </div> 
                        
                        <div class="col-4"></div>
                        <div class="col-4 col-offset-4">
                        <input class="btn2 btn-theme03" type="submit" name="update" >
                        </div> 
                        </form>
                        <div class="col-4"></div>   

                </div>

                <div class="col-4">
                        <div class="form">
                            <div class="fill">
                                <form class="#" action="edittransact.php" method="POST" autocomplete="on">
                                    <table >
                                        <tr>
                                            <tr>
                                                <div class="col-4 col-offset-4">
                                                    <td>
                                                        <h3>BARANGAY CERTIFICATION:<h3>
                                                    </td>
                                                </div>
                                            <tr>
                                                <td>
                                                    <label align='right'>Amount:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="clear" maxlength="50" placeholder="">
                                                </td>
                                            </tr>     
                                        </tr>
                                    </table>

                            </div> 
                        </div> 
                        
                        <div class="col-4"></div>
                        <div class="col-4 col-offset-4">
                        <input class="btn2 btn-theme03" type="submit" name="update2">
                        </div> 
                        </form>          
                        <div class="col-4"></div>   
                        

                </div>

                <div class="col-4">
                        <div class="form">
                            <div class="fill">
                            <form class="#" action="edittransact.php" method="POST" autocomplete="on">
                                    <table >
                                        <tr>
                                            <tr>
                                                <div class="col-4 col-offset-4">
                                                    <td>
                                                        <h3>BARANGAY CEDULA: <h3>
                                                    </td>
                                                </div>
                                            <tr>
                                                <td>
                                                    <label align='right'>Amount:</label>
                                                </td>
                                                <td>
                                                    <input type="text" name="certif" maxlength="50" placeholder="">
                                                </td>
                                            </tr> 
                                        </tr>
                                    </table> 
                            </div> 
                        </div> 
                        
                        <div class="col-4"></div>
                        <div class="col-4 col-offset-4">
                            <input class="btn2 btn-theme03" type="submit" name="update3">
                        </div> 
                        </form>          
                        <div class="col-4"></div>   

                </div>

             
           
                
              
            <!-- <div class="col-4 col-offset-4"> -->

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