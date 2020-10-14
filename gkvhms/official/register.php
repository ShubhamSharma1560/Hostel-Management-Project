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
            * {
                scroll-behavior: smooth;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
    
            @media screen and (max-width:360px) {
                #media {
                    display: none;
                }
    
                #gkv {
                    display: none;
                }
    
                #logo {
                    display: flex;
                    justify-content: center;
                }
                .textsize {
            font-size: xx-small;
          }
    
            }
    
            @media screen and (max-width:526px) {
                #media {
                    display: none;
                }
    
                #gkv {
                    display: none;
                }
    
                #logo {
                    display: flex;
                    justify-content: center;
                }
                .textsize {
            font-size:xx-small;
          }
    
            }
    
            @media screen and (min-width: 527px) and (max-width:660px) {
                #media {
                    display: none;
                }
    
                #logo {
                    display: none;
                }
                .textsize {
            font-size: small;
          }
    
            }
    
            @media screen and (min-width: 661px) and (max-width:991px) {
                #media {
                    display: none;
                }
                .textsize {
            font-size:medium;
          }
            }
        </style>
        <title>GurukulHMS</title>
    </head>
    
    <body>
        <header id="header">
            <div class="container-fluid" style="display: flex;">
                <div id="logo" class="col-lg-3 col-md-3 logo"><a href="https://www.gkv.ac.in/"><img
                            src="../images/logo.png"></a></div>
                <div id="gkv" class="col-lg-6 col-md-6 U-name text-center"><a href="https://www.gkv.ac.in/"><img
                            src="../images/gkv-un.png"></a></div>
                <div id="media" class="col-lg-3 col-md-3 founder text-right"><a href="https://www.gkv.ac.in/"><img
                            src="../images/gkv-founder.png"></a></div>
            </div>
        </header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <a style="display: flex;" class="navbar-brand" href="/gkvhms/official/index.html"
                style="font-size:1.55rem;color:royalblue ;">
                <img src="../images/GKV.jpg" width="50" height="50" class="d-inline-block rounded-circle" alt="GKV">
                <p style="color: blueviolet; margin: 10px;">GKV Hostel Management</p>
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
          <a class="nav-link" href="/gkvhms/official/index.html#holiday">Holidays</a>
        </li>
                  <li class="nav-item" style="font-size: 1.5rem;">
                      <a class="nav-link" href="/gkvhms/official/index.html#contact">Contact</a>
                  </li>
                  <li class="nav-item dropdown"style="font-size: 1.5rem;">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login Links</a>
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
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $FatherName=$_POST['fathername'];
    $Address=$_POST['address'];
    $ParentMob=$_POST['parentmob'];
    $Email=$_POST['email'];
    $DOB=$_POST['date'];
    $Category=$_POST['Category'];
    $Contact=$_POST['number'];
    $Marks=$_POST['Marks'];
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    $Branch=$_POST['branch'];
    $Year=$_POST['year'];
    $Hostel=$_POST['hostel'];
    //   connecting to databse
    include('../connection.php');
    $conn = OpenCon();
    $existsql="SELECT * FROM `registration` where Username='$Username'";
    $sqlresult=mysqli_query($conn,$existsql);
    $numExistRows=mysqli_num_rows($sqlresult);
    if($numExistRows>0)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show alert-danger" role="alert">
        <strong>ERROR!</strong>User Already Exists! Choose Another UserName
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'; 
    }
    else
    {
    // submitting to database
    $Password=md5($Password);
    $sql="INSERT INTO `registration`(`FirstName`, `LastName`, `FatherName`, `Address`, `ParentMobNo`, `Email`, `DOB`, `Contact`, `Category`, `Marks`, `Username`, `passcode`, `Branch`, `YearOfStudy`, `Hostel`)  VALUES('$FirstName','$LastName','$FatherName','$Address','$ParentMob','$Email','$DOB','$Contact','$Category','$Marks','$Username','$Password','$Branch','$Year','$Hostel')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<div class="alert-dismissible fade show alert alert-success" role="alert">
        <strong>Success </strong> Your Registeration Has been submitted succesfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    else {
        echo '<div class="alert alert-warning alert-dismissible fade show alert-danger" role="alert">
            <strong>ERROR!</strong> Due to Technical Error Your Entry is not registered please try again later ! Sorry for inconvinience
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
  }
}
?>
    
    <div class="container-fluid" style="overflow:auto; background-color:skyblue;">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item active navbar-dark bg-danger">DashBoard</a>
                    <a href="/gkvhms/official/login.php" class="list-group-item "> Admin Login</a>
                    <a href="/gkvhms/official/studentlogin.php"class="list-group-item "> Student Login </a>
                    <a href="/gkvhms/official/employeelogin.php"class="list-group-item"> Employee Login </a>
                    <a href="/gkvhms/official/register.php" class="list-group-item bg-warning">Register/Apply for Room</a>
                    <a href="/gkvhms/official/meal.html" class="list-group-item">Meal Info</a>
                    <a href="/gkvhms/official/hostelfees.html" class="list-group-item">Hostel Fees Info</a>
                    <a href="/gkvhms/official/notice.html" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/official/room.html" class="list-group-item">Hostel Room</a>
                    
                </div>
                <hr>
                <div class="list-group">
                    <a class="list-group-item active" >Only Admin Access</a>
                    <a href="/gkvhms/admin/studentlist.php" class="list-group-item " > Student Manage</a>
                    <a href="/gkvhms/admin/admin.php" class="list-group-item" >Employee Manage</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="background-color: #3498DB;color: #ffffff; padding:10px 5px; text-align: center;">
                        REGISTER HERE
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="/gkvhms/official/register.php" method="post">
                            <label>First Name : </label>
                            <input type="text" name="fname" class="form-control" required><br>
                            <label>Last Name : </label>
                            <input type="text" name="lname" class="form-control"><br>
                            <label>Father's Name : </label>
                            <input type="text" name="fathername" class="form-control"required><br>
                            <label>Address : </label>
                            <input type="text" name="address" class="form-control" required><br>
                            <label>Parent Contact : </label>
                            <input type="text" name="parentmob" class="form-control" required><br>
                            <label>Email : </label>
                            <input type="email" name="email" class="form-control"required><br>
                            <label>Data of Birth : </label>
                            <input type="date" name="date" class="form-control"required><br>
                            <label>Contact : </label>
                            <input type="text" name="number" class="form-control" required><br>
                            <label>Category : </label>
                            <select class="form-control" name="Category" >
                                <option value="GEN">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                            </select><br>
                            <label>Percentage : </label>
                            <input type="text" name="Marks" class="form-control" required placeholder="Enter Previous Class Percentage"><br>
                            <label>Username : </label>
                            <input type="text" name="username" class="form-control" required><br>
                            <label>Password : </label>
                            <input id="password" type="password" name="password" class="form-control" onchange="checkpass();"><br>
                            <label>Confirm Password : </label>
                            <input id="rpassword" type="password" name="password" class="form-control" onchange="checkpass();"><br>
                            <label>Course Name : </label>
                            <select class="form-control" name="branch" >
                                <option value="CSE">CSE</option>
                                <option value="EE">EE</option>
                                <option value="ECE">ECE</option>
                                <option value="ME">ME</option>
                            </select><br>
                            <label>Year : </label>
                            <select class="form-control" name="year" >
                                <option value="First Year">First Year</option>
                                <option value="Second Year">Second Year</option>
                                <option value="Third Year">Third Year</option>
                                <option value="Fourth Year">Fourth Year</option>
                            </select><br>
                            <label>Choose Hostel : </label>
                            <select class="form-control" name="hostel">
                                <option value="Swami Sharadhanand Hostel">Swami Sharadhanand Hostel</option>
                                <option value="Pt. Lekhram Hostel">Pt. Lekhram Hostel</option>
                            </select><br>
                            <button type="submit" id="submit" class="btn btn-primary form-control">REGISTER</button>
                        </form>
                    </div>
                    <h5 class="textsize" style="color:red; font-weight:bold; text-align:center;">REMEMBER YOUR USERNAME AND PASSWORD</h5>
                </div>
               
            </div>
            
        </div>
        
    </div>
    <footer style="margin-top:10px; border-top: solid black;border-bottom: solid black;">
        <h5 style="text-align: center;">Copyright © 2020 Gurukula Kangri Vishwavidyalaya. All rights reserved</h5><br>
          <a style="margin-left: 40%;" href="https://www.facebook.com/gkvharidwar"><img
              style="height: 30px; border-radius: 50px;" src="../images/facebook'.png" alt="facebook"></a>
          <a style="margin-left: 2%;"
            href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFEcn0EYGoRwwAAAXIE2hKgc_fzaTBXkuUUdKrdwkXcNK99YyaxvWSZgEx7M14ne_wo4-4tS7hFT7M9BVtF58V7yHJuASs6ORn55MZq4hJNaUcJNJ_5HmEQw0DxCFmOGYEgX-c=&originalReferer=https://www.gkv.ac.in/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fgurukula-kangri-vishwavidyalaya%2F"><img
              style="height: 30px; border-radius: 50px;" src="../images/linkedin.png" alt="linkedin"></a>
          <a style="margin-left: 2%;" href="https://twitter.com/gkvsocial"><img style="height: 30px; border-radius: 50px;"
              src="../images/twitter.png" alt="twitter"></a>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script>
            function checkpass() {
                var pass = document.getElementById("password").value;
                var rpass = document.getElementById("rpassword").value;
                if (pass == rpass) {
                    document.getElementById("submit").disabled = false;
                }
                else {
                    document.getElementById("submit").disabled = true;
                }
            }

        </script>
</body>

</html>