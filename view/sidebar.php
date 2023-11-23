<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/sidebar.css">
</head>
<body>
  <div id="mySidebar" class="sidebar">
    <!--SIDEBAR LOGO-->
    <div class="menu"><h1>HRS</h1></div>
    <!--SIDEBAR CONTENT-->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a><br><br>
    <hr>
    <h2>MENU</h2>
      <a href="analytics.php"><i class="fa-solid fa-house-chimney fa-sm"></i> &nbsp;Dashboard</a>
    
    <!--DROPDOWN EMPLOYEE-->
    <div class="dropdown">
      <a href="#" onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Employees</a>
      <div id="myDropdown" class="dropdown-content">
        <a href="#">Admin Dashboard &nbsp;<i class="fa-solid fa-user fa-sm"></i></a>
        <a href="addEmployee.php">Employee Dashboard &nbsp;<i class="fa-solid fa-users fa-sm"></i></a>
      </div>
    </div>
    
      <a href="#"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;Information</a>
      <a href="#"><i class="fa-solid fa-sack-dollar fa-sm"></i> &nbsp;Payroll</a>
      <a href="#"><i class="fa-regular fa-calendar-days fa-sm"></i> &nbsp;Schedules</a>
<hr>
          <h2>OTHERS</h2>
      <a href="#"><i class="fa-solid fa-users fa-sm"></i> &nbsp;Account</a>
      <a href="#"><i class="fa-regular fa-circle-question fa-sm"></i> &nbsp;asd</a>
      <a href="#"><i class="fa-solid fa-sack-dollar fa-sm"></i> &nbsp;asd</a>
      <a href="#"><i class="fa-regular fa-calendar-days fa-sm"></i> &nbsp;asd</a>
</div>

<div id="main">
  <!--NAV BAR-->
  <ul class="flex">
    <button class="openbtn" onclick="openNav()">☰</button>
      <li style="font-size: 25px;"><i class="fa-solid fa-circle-h fa-2xl" style="color: #081935;"></i> Human Resource</li>
      <li style="margin-left:auto;"><i class="fa-solid fa-circle-user fa-2xl" style="color: #081935;"></i> Profile</li>
  </ul>
  <hr>
  
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
  
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>


</body>
</html>
