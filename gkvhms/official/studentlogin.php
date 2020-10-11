<?php
 $login=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
      //   connecting to databse
    include('../connection.php');
    $conn = OpenCon();
        $Username=$_POST['username'];
        $Password=$_POST['password'];
      $Password=md5($Password);
      $sql = "SELECT * FROM `allotedstudent` WHERE Username = '$Username' AND passcode = '$Password'";
      $result = mysqli_query($conn,$sql);   
      $count = mysqli_num_rows($result);   
     if($count==1) 
       {     
        $login=true;   
        session_start();
        $_SESSION['login']=true;
        $_SESSION['username']=$Username;
        header("location:../student/student.php"); 
      }
     else 
     {
        echo "<script>alert('Error! Invalid Credentials Please Enter Valid Username Or Password ! ');window.location='/gkvhms/official/studentlogin.php'</script>";
     }
    
 }
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
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
    <title>GurukulHMS</title>
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
          <a class="navbar-brand" href="/gkvhms/official/index.html"  style="font-size:1.55rem;color:royalblue ;">
              <img src="../images/GKV.jpg" width="50" height="50" class="d-inline-block rounded-circle" alt="GKV">
                  GKV Hostel Management
          </a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item active" style="font-size: 1.5rem;">
                      <a class="nav-link" href="/gkvhms/official/index.html#home">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item" style="font-size: 1.5rem;">
                      <a class="nav-link" href="/gkvhms/official/index.html#facilities">Facilities</a>
                  </li>
                  <li class="nav-item" style="font-size: 1.5rem;">
                      <a class="nav-link" href="/gkvhms/official/index.html#info">Info</a>
                  </li>
                  <li class="nav-item" style="font-size: 1.5rem;">
                      <a class="nav-link" href="/gkvhms/official/index.html#contact">Contact</a>
                  </li>
                  <li class="nav-item dropdown"style="font-size: 1.5rem;">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ">Login Links</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="position:absolute; z-index:10;">
                         <a class="dropdown-item" href="/gkvhms/official/register.php">Student Registration</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="/gkvhms/official/login.php">Admin Login</a>
                         <a class="dropdown-item" href="/gkvhms/official/studentlogin.php">Student login</a>
                         <a class="dropdown-item" href="/gkvhms/official/employeelogin.php">Employee login</a>
                      </div>
                  </li>
                  <li class="nav-item" style="font-size: 1.5rem;">
                    <a class="nav-link" href="/gkvhms/official/index.html#Query">Query Box</a>
                </li>
                  
              </ul>
          </div>
      </nav>
<div class="container-fluid" style="overflow:auto;background-color:lightblue;">

  <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active navbar-dark bg-dark">DashBoard</a>
                    <a href="/gkvhms/official/login.php" class="list-group-item "> Admin Login</a>
                    <a href="/gkvhms/official/studentlogin.php"class="list-group-item bg-warning"> Student Login </a>
                    <a href="/gkvhms/official/employeelogin.php"class="list-group-item "> Employee Login </a>
                    <a href="/gkvhms/official/register.php" class="list-group-item">Register/Apply for Room</a>
                    <a href="/gkvhms/official/meal.html" class="list-group-item">Meal Info</a>
                    <a href="/gkvhms/official/hostelfees.html" class="list-group-item">Hostel Fees Info</a>
                    <a href="/gkvhms/official/notice.html" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/official/room.html" class="list-group-item">Hostel Room</a>
                    
                </div>
                <hr>
                <div class="list-group">
                    <a href="/gkvhms/admin/admin.php" class="list-group-item active" >Only Admin</a>
                    <a href="/gkvhms/admin/studentlist.php" class="list-group-item " > Student List</a>
                    <a href="/gkvhms/admin/admin.php" class="list-group-item" >Employee Manage</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card"style="margin-top:10px;">
                    <div class="card-body" style="background-color: rgb(16, 17, 17);color: #ffffff; text-align: center;">
                       STUDENT LOGIN HERE
                    </div>
                    <div class="card-body" style="background-color:lightgreen;">
                        <form class="form-group" action="/gkvhms/official/studentlogin.php" method="post">
                            <label>Username : </label>
                            <input type="text" name="username" placeholder="ENTER USERNAME" class="form-control"><br>
                            <label>Password : </label>
                            <input id="password" type="password" placeholder="ENTER PASSWORD" name="password" class="form-control"><br>
                            <button type="submit" class="btn btn-primary form-control">SIGN IN</button>
                        </form>
                        <a href="/gkvhms/official/register.php" ><button class="bg-dark" style=" margin-left:40%;font-weight:bold;padding:10px 50px; color:white;">Register Here</button></a>
                    </div>
                </div>
                <h3 style="color:red;">If You Don't Remember Your Username Or Password Then Contact To administrator Immediately!</h3>
            </div>
        </div>
        
    </div>
    <footer style="margin-top:10px; border-top: solid black;">
        <h5 style="text-align: center;">Copyright © 2020 Gurukula Kangri Vishwavidyalaya. All rights reserved</h3><br>
        <a style="margin-left: 50%;" href="https://www.facebook.com/gkvharidwar"><img style="height: 30px; border-radius: 50px;" src="../images/facebook'.png" alt="facebook"></a>
        <a style="margin-left: 2%;" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFEcn0EYGoRwwAAAXIE2hKgc_fzaTBXkuUUdKrdwkXcNK99YyaxvWSZgEx7M14ne_wo4-4tS7hFT7M9BVtF58V7yHJuASs6ORn55MZq4hJNaUcJNJ_5HmEQw0DxCFmOGYEgX-c=&originalReferer=https://www.gkv.ac.in/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fgurukula-kangri-vishwavidyalaya%2F"><img style="height: 30px; border-radius: 50px;" src="../images/linkedin.png" alt="linkedin"></a>
        <a style="margin-left: 2%;" href="https://twitter.com/gkvsocial"><img style="height: 30px; border-radius: 50px;" src="../images/twitter.png" alt="twitter"></a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
  </body>
</html>
