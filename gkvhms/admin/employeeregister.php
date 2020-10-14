<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo "<script type='text/javascript'>window.location.href = '../official/login.php';</script>";
    exit();
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

        }

        @media screen and (min-width: 527px) and (max-width:660px) {
            #media {
                display: none;
            }

            #logo {
                display: none;
            }

        }

        @media screen and (min-width: 661px) and (max-width:991px) {
            #media {
                display: none;
            }
        }
    </style>
    <title>GKV@ADMIN</title>
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
        <a style="display: flex;" class="navbar-brand" href="/gkvhms/admin/admin.php"
            style="font-size:1.55rem;color:royalblue ;">
            <img src="../images/GKV.jpg" width="50" height="50" class="d-inline-block rounded-circle" alt="GKV">
            <p style="color: blueviolet; margin: 10px;">Admin @SHUBHAM</p>
        </a>  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="/gkvhms/admin/admin.php#home">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/gkvhms/admin/admin.php#facilities">Facilities</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/admin/employeeregister.php">Employee Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/admin/Allotment.php">Allot Hostel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/admin/showquery.php">Official Queries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/admin/admin.php#holiday">Holidays</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ">Student Corner</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="position:absolute; z-index:10;">
                       <a class="dropdown-item" href="/gkvhms/admin/showstudentquery.php">Student Queries</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="/gkvhms/admin/admin.php#details">Hostel Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/admin/employeelist.php">Employee List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gkvhms/admin/logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $Address=$_POST['Paddress'];
    $CAddress=$_POST['Caddress'];
    $Post=$_POST['post'];
    $City=$_POST['city'];
    $State=$_POST['state'];
    $Email=$_POST['email'];
    $DOB=$_POST['date'];
    $Salary=$_POST['salary'];
    $Contact=$_POST['number'];
    $Category=$_POST['category'];
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    $Gender=$_POST['gender'];
    $Hostel=$_POST['hostel'];
 //   connecting to databse
 include('../connection.php');
 $conn = OpenCon();
    $existsql="SELECT * FROM `employee` where Username='$Username'";
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
    else{
    // submitting to database
    $Password=md5($Password);
    $sql="INSERT INTO `employee`(`FirstName`, `LastName`,  `PermanentAddress`, `CurrentAddress`, `Post`, `City`,`State`,`Email`, `DOB`,`Salary`, `Contact`, `Category`, `Username`, `passcode`, `Gender`, `Hostel`)  VALUES('$FirstName','$LastName','$Address','$CAddress','$Post','$City','$State','$Email','$DOB','$Salary','$Contact','$Category','$Username','$Password','$Gender','$Hostel')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<div class="alert-dismissible fade show alert alert-success" role="alert">
        <strong>Success </strong> Employee Registeration Has been submitted succesfully!
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
 <div class="container-fluid" style="overflow:auto; background-color:skyblue;"">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item active navbar-dark bg-danger" id="home"><?php echo $_SESSION['username'];?> DashBoard</a>
                    <a href="/gkvhms/admin/admin.php#details" class="list-group-item">Hostel Details</a>
                    <a href="/gkvhms/admin/showstudentquery.php"class="list-group-item "> Student Query Box</a>
                    <a href="/gkvhms/admin/showquery.php" class="list-group-item">Official Query Box</a>
                    <a href="/gkvhms/admin/admin.php#notice" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/admin/admin.php#facilities" class="list-group-item">Facilities</a>
                    <a href="/gkvhms/admin/admin.php#meal" class="list-group-item">Meal Timetable</a>
                    <a href="/gkvhms/official/index.html" target="_blank"class="list-group-item">Official Website</a>
                    
                </div>
                <hr>
                <div class="list-group">
                    <a  class="list-group-item active">Other Details</a>
                    <a href="/gkvhms/admin/Allotment.php" class="list-group-item">Hostelers Details</a>
                    <a href="/gkvhms/admin/studentlist.php" class="list-group-item">Registered Student Details</a>
                    <a href="/gkvhms/admin/employeelist.php"class="list-group-item">Employee Detail</a>
                    <a href="/gkvhms/admin/logout.php" class="list-group-item" >Logout</a>
                </div>
</div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="background-color: #3498DB;color: #ffffff; padding:10px 5px; text-align: center;">
                        Welcome To Employee Registration
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="/gkvhms/admin/employeeregister.php" method="post">
                            <label>First Name : </label>
                            <input type="text" name="fname" class="form-control" required><br>
                            <label>Last Name : </label>
                            <input type="text" name="lname" class="form-control"><br>
                            <label>Permanent Address : </label>
                            <input type="text" name="Paddress" class="form-control" required><br>
                            <label>Current Address : </label>
                            <input type="text" name="Caddress" class="form-control" required><br>
                            <label>Job Name : </label>
                            <input type="text" name="post" class="form-control" required><br>
                            <label>City: </label>
                            <input type="text" name="city" class="form-control" required><br>
                            <label>State : </label>
                            <input type="text" name="state" class="form-control" required><br>
                            <label>Email : </label>
                            <input type="email" name="email" class="form-control"required><br>
                            <label>Data of Birth : </label>
                            <input type="date" name="date" class="form-control"required><br>
                            <label>Annual Salary: </label>
                            <input type="text" name="salary" class="form-control" required><br>
                            <label>Contact : </label>
                            <input type="text" name="number" class="form-control" required><br>
                            <label>Category : </label>
                            <select class="form-control" name="category" >
                                <option value="GEN">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                            </select><br>
                            <label>Username : </label>
                            <input type="text" name="username" class="form-control" required><br>
                            <label>Password : </label>
                            <input id="password" type="password" name="password" class="form-control" onchange="checkpass();"><br>
                            <label>Confirm Password : </label>
                            <input id="rpassword" type="password" name="password" class="form-control" onchange="checkpass();"><br>
                            <label>Gender : </label>
                            <select class="form-control" name="gender" >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select><br>
                            <label>Choose Duty Block : </label>
                            <select class="form-control" name="hostel">
                                <option value="Swami Sharadhanand Hostel">Swami Sharadhanand Hostel</option>
                                <option value="Pt. Lekhram Hostel">Pt. Lekhram Hostel</option>
                            </select><br>
                            <button type="submit" id="submit"class="btn btn-primary form-control">REGISTER</button>
                        </form>
                    </div>
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
