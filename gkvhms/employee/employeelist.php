<?php
session_start();
if(!isset($_SESSION['signedin']) || $_SESSION['signedin']!=true){
    echo "<script type='text/javascript'>window.location.href = '../official/employeelogin.php';</script>";
    exit();
}
 //   connecting to databse
 include('../connection.php');
 $conn = OpenCon();
  $query="SELECT `SerialNo` , `FirstName` , `LastName` , `PermanentAddress`,`CurrentAddress` ,`Post`,`City`,`State`,`Email`, `DOB` ,`Salary`, `Contact`,`Category` ,`Gender`,`Hostel` FROM `employee`where `Username`='{$_SESSION['username']}'";
  $result=mysqli_query($conn,$query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *{
            scroll-behavior: smooth;
            font-family: sans-serif;}
    </style>
    <title>employee GKV</title>
</head>

<body>
    <header id="header">
        <div class="container" style="display: flex;">
        <div class="col-lg-3 col-md-3 logo"><a href="https://www.gkv.ac.in/"><img src="../images/logo.png"></a></div>
        <div class="col-lg-6 col-md-6 U-name text-center"><a href="https://www.gkv.ac.in/"><img src="../images/gkv-un.png"></a></div>
        <div class="col-lg-3 col-md-3 founder text-right"><a href="https://www.gkv.ac.in/"><img src="../images/gkv-founder.png"></a></div>
        </div>
        </header>
    
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="/gkvhms/employee/employee.php" style="font-size:1.55rem;color:royalblue ;">
              <img src="../images/GKV.jpg" width="50" height="50" class="d-inline-block rounded-circle" alt="GKV">
                 Employee GKV  
          </a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="/gkvhms/employee/employee.php#home">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/gkvhms/employee/employee.php#responsibilities">Responsibilities</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/employee/showstudentquery.php#suggestion">Student Suggestion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/employee/showstudentquery.php">Student Complaint</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/gkvhms/employee/studentlist.php">Student List</a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/employee/employee.php#task">TASK List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/employee/employee.php#details">Hostel Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/employee/logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid" style="overflow:auto;">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active navbar-dark bg-dark" id="home"> <?php echo $_SESSION['username'];?> DashBoard</a>
                    <a href="/gkvhms/employee/employee.php#notice" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/employee/showstudentquery.php"class="list-group-item"> Student Query Box</a>
                    <a href="/gkvhms/employee/employee.php#maintain" class="list-group-item">Hostel maintainance</a>
                    <a href="/gkvhms/employee/employee.php#responsibilities" class="list-group-item">Responsibilities</a>
                    <a href="/gkvhms/employee/employee.php#facilities" class="list-group-item">Facilities</a>
                    <a href="/gkvhms/official/index.html" target="_blank"class="list-group-item">Official Website</a>
                    
                </div>
                <hr>
                <div class="list-group">
                    <a href="" class="list-group-item active">DETAILS</a>
                    <a href="/gkvhms/employee/employee.php#details" class="list-group-item">Hostel Details</a>
                    <a href="/gkvhms/employee/employeelist.php" class="list-group-item">Your Details</a>
                    <a href="/gkvhms/employee/employee.php#task"class="list-group-item">Tasks</a>
                    <a href="/gkvhms/employee/logout.php" class="list-group-item" >Logout</a>
                </div>
            </div>
        <div class="col-md-9" id="home">
<h1 style="color:black;background-color:orange; padding:12px 5px; text-align:center;">Your Details</h1>
        <table class="table table-sm table-responsive table-hover table-secondary table-bordered">
            <thead>
                <tr>
                    <th scope="col">SerialNo</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Permanent Address</th>
                    <th scope="col">Current Address</th>
                    <th scope="col">Job Name</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB </th>
                    <th scope="col">Salary</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Category</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Duty Block</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   while($rows=mysqli_fetch_assoc($result))
                   {
                ?>
                <tr>
                    <th scope="row"><?php echo $rows['SerialNo']; ?></th>
                    <td><?php echo $rows['FirstName']; ?></td>
                    <td><?php echo $rows['LastName'] ;?></td>
                    <td><?php echo $rows['PermanentAddress']; ?></td>
                    <td><?php echo $rows['CurrentAddress']; ?></td>
                    <td><?php echo $rows['Post']; ?></td>
                    <td><?php echo $rows['City']; ?></td>
                    <td><?php echo $rows['State']; ?></td>
                    <td><?php echo $rows['Email']; ?></td>
                    <td><?php echo $rows['DOB']; ?></td>
                    <td><?php echo $rows['Salary']; ?></td>
                    <td><?php echo $rows['Contact']; ?></td>
                    <td><?php echo $rows['Category']; ?></td>
                    <td><?php echo $rows['Gender']; ?></td>
                    <td><?php echo $rows['Hostel']; ?></td>
                </tr>
                <?php
                   }
                ?>
    
            </tbody>
        </table>

                </div>
                </div>
                </div>
    <footer style="margin-top:10px; border-top: solid black; border-bottom:solid black;">
              <h5 style="text-align: center;">Copyright © 2020 Gurukula Kangri Vishwavidyalaya. All rights reserved</h3><br>
              <a style="margin-left: 50%;" href="https://www.facebook.com/gkvharidwar"><img style="height: 30px; border-radius: 50px;" src="../images/facebook'.png" alt=""></a>
              <a style="margin-left: 2%;" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFEcn0EYGoRwwAAAXIE2hKgc_fzaTBXkuUUdKrdwkXcNK99YyaxvWSZgEx7M14ne_wo4-4tS7hFT7M9BVtF58V7yHJuASs6ORn55MZq4hJNaUcJNJ_5HmEQw0DxCFmOGYEgX-c=&originalReferer=https://www.gkv.ac.in/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fgurukula-kangri-vishwavidyalaya%2F"><img style="height: 30px; border-radius: 50px;" src="../images/linkedin.png" alt=""></a>
              <a style="margin-left: 2%;" href="https://twitter.com/gkvsocial"><img style="height: 30px; border-radius: 50px;" src="../images/twitter.png" alt=""></a>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>