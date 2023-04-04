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
                    <li class="dropdown">
                        <a href="history.php">History</a>
                    </li>
                </ul>  
        </ul>
    </div>



    <!-- MAIN CONTENT -->
    <div margin-left="5%" id="container"> 
        <div class="row">  

            <div class="col-6">
                        <div class= "form2">                           
                          
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
                
</body>
</html>