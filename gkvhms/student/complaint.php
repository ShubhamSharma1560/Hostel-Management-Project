<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']!=true)
{
    header("location : /gkvhms/official/studentlogin.php");
    exit;
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
    <title>GurukulStudent</title>
</head>

<body>
    <header id="header">
        <div class="container" style="display: flex;">
        <div class="col-lg-3 col-md-3 logo"><a href="https://www.gkv.ac.in/"><img src="../images/logo.png"></a></div>
        <div class="col-lg-6 col-md-6 U-name text-center"><a href="https://www.gkv.ac.in/"><img src="../images/gkv-un.png"></a></div>
        <div class="col-lg-3 col-md-3 founder text-right"><a href="https://www.gkv.ac.in/"><img src="../images/gkv-founder.png"></a>
        </div>
        </div>
        </header>
   
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/gkvhms/student/student.php" style="color:royalblue ;">
            <img src="../images/GKV.jpg" width="50" height="50" class="d-inline-block rounded-circle" alt="GKV">
                GKV Student DashBoard
        </a>  
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>  
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active"">
                    <a class="nav-link" href="/gkvhms/student/student.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"">
                <a class="nav-link" href="/gkvhms/student/suggestioncomplaint.php">Your Queries/Suggestions</a>
                </li>
                <li class="nav-item"">
                    <a class="nav-link" href="/gkvhms/student/Allotment.php" >Allotment Result</a>
                </li>
                <li class="nav-item"">
                    <a class="nav-link" href="/gkvhms/student/student.php#meal" >Meal Timetable</a>
                </li>
                <li class="nav-item"">
                    <a class="nav-link" href="/gkvhms/student/student.php#holiday" >Holidays</a>
                </li>
                <li class="nav-item"">
                    <a class="nav-link" href="/gkvhms/student/student.php#contact" >Help/Contacts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ">Your Details</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="position:absolute; z-index:10;">
                       <a class="dropdown-item" href="/gkvhms/student/details.php" >Your Details</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="/gkvhms/student/studentlogout.php">Logout</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ">Queries</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="position:absolute; z-index:10;">
                       <a class="dropdown-item" href="/gkvhms/student/complaint.php" >Make Complaint</a>
                       <a class="dropdown-item" href="/gkvhms/student/suggestion.php" >Give Suggestion</a>
                       <a class="dropdown-item" href="/gkvhms/student/student.php#contact">Help</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="/gkvhms/student/studentlogout.php">Logout</a>  
                    </div>
                </li>
                <li class="nav-item"">
                <a class="nav-link" href="/gkvhms/student/studentlogout.php">LOGOUT</a>
                </li>
                
            </ul>
        </div>
    </nav>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST')
{  
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Username=$_POST['username'];
    $Complaint=$_POST['complaint'];
    $Room=$_POST['room'];
    $Course=$_POST['course'];
    $Hostel=$_POST['hostel'];
    $Phone=$_POST['phone'];
    $ComplaintDetail=$_POST['complaintdetail'];
//   connecting to databse
$servername="localhost";
$username="root";
$password="";
$database="gkvhms";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  die("Sorry connection to database is not established:".mysqli_connect_error());
}
else{
    $existsql="SELECT * FROM `allotedstudent` where Username='$Username'";
    $sqlresult=mysqli_query($conn,$existsql);
    $numExistRows=mysqli_num_rows($sqlresult);
    if($numExistRows<1)
    {
        echo '<div class="alert alert-warning alert-dismissible fade show alert-danger" role="alert">
        <strong>ERROR!</strong>User NOT Exists! Enter Valid Username
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'; 
    }
    else{
    // submitting to database
    $sql="INSERT INTO `complaint`(`Name`, `Email`,`Username`, `Complaint`,`Room`,`Course`,`Hostel`,`Contact`, `Brief Complaint`)  VALUES('$Name','$Email','$Username','$Complaint','$Room','$Course','$Hostel','$Phone','$ComplaintDetail')";
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
}
?>
     <div class="container-fluid" style="overflow:auto;">
        <div class="row">
            <div class="col-md-3">
            <div class="list-group">
                    <a href="" class="list-group-item active navbar-dark bg-dark">QUERIES</a>
                    <a href="/gkvhms/student/Allotment.php"class="list-group-item">Hostel Allotment Student List</a>
                    <a href="/gkvhms/student/complaint.php" class="list-group-item bg-warning">File COMPLAINT</a>
                    <a href="/gkvhms/student/suggestion.php" class="list-group-item "> Any SUGGESTION</a>
                    <a href="/gkvhms/student/studentlogout.php" class="list-group-item">LOGOUT</a>
                </div>
                <hr>
                <div class="list-group">
                    <a href="" class="list-group-item active "><?php echo $_SESSION['username'];?> DashBoard</a>
                    <a href="/gkvhms/student/suggestioncomplaint.php"  class="list-group-item "> Complaint Response</a>
                    <a href="/gkvhms/student/suggestioncomplaint.php"  class="list-group-item "> Suggestion Response </a>
                    <a href="/gkvhms/student/student.php#meal"  class="list-group-item">Meal Info</a>
                    <a href="/gkvhms/student/student.php#notice" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/student/student.php#holiday"   class="list-group-item">Holiday Calender</a>
                    <a href="/gkvhms/student/student.php#contact"class="list-group-item">Emergency Contacts</a>   
                    <a href="/gkvhms/official/index.html"class="list-group-item">Official Website</a> 
                </div>
            </div>
            <div class="col-md-9">
                <h1 style="text-align:center;background-color:skyblue; color: black; font-weight:bold; padding:10px 5px;">
                    COMPLAINT BOX
                </h1>
                <form action="/gkvhms/student/complaint.php" method="post">
           <div class="form-group">
            <label>Name </label>
              <input type="text" class="form-control" name="name" placeholder="First name"></div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="name@example">
            </div>
            <div class="form-group">
              <label for="inlineFormCustomSelect">Complaint Related To</label>
              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="complaint" required>
                <option selected value="0">Choose...</option>
                <option value="Mess/Food Complaint">Mess/Food Complaint</option>
                <option value="Room Maintenance">Room Maintenance</option>
                <option value="Bathroom Complaint">Bathroom Complaint</option>
                <option value="Wifi Complaint">Wifi Complaint</option>
                <option value="Security Complaint">Security Complaint</option>
                <option value="Any Other">Any Other</option>
              </select>
            </div>
            <div class="form-group">
              <label>Room No.</label>
                 <input type="text" name="room" class="form-control"required><br>
            </div>
            <div class="form-group">
              <label>Course Name</label>
                 <input type="text" name="course" class="form-control"required><br>
            </div>
            <div class="form-group">
              <label> Hostel Name </label>
                 <input type="text" name="hostel" class="form-control"required><br>
            </div>
            <div class="form-group">
              <label>Contact No. </label>
                 <input type="text" name="phone" class="form-control"required><br>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Brief Complaint</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="complaintdetail" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
          </form>
          </div>
          </div>
        
          <footer style="margin-top:10px; border-top: solid black;">
              <h5 style="text-align: center;">Copyright © 2020 Gurukula Kangri Vishwavidyalaya. All rights reserved</h3><br>
              <a style="margin-left: 50%;" href="https://www.facebook.com/gkvharidwar"><img style="height: 30px; border-radius: 50px;" src="../images/facebook'.png" alt=facebook""></a>
              <a style="margin-left: 2%;" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFEcn0EYGoRwwAAAXIE2hKgc_fzaTBXkuUUdKrdwkXcNK99YyaxvWSZgEx7M14ne_wo4-4tS7hFT7M9BVtF58V7yHJuASs6ORn55MZq4hJNaUcJNJ_5HmEQw0DxCFmOGYEgX-c=&originalReferer=https://www.gkv.ac.in/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fgurukula-kangri-vishwavidyalaya%2F"><img style="height: 30px; border-radius: 50px;" src="../images/linkedin.png" alt="linkedin"></a>
              <a style="margin-left: 2%;" href="https://twitter.com/gkvsocial"><img style="height: 30px; border-radius: 50px;" src="../images/twitter.png" alt="twitter"></a>
          </footer>

  </div>
   
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
</body>

</html>