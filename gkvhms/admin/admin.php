<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
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

      .textsize {
        font-size: small;
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
        font-size: small;
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
        font-size: medium;
      }
    }

    @media screen and (min-width: 661px) and (max-width:991px) {
      #media {
        display: none;
      }

      .textsize {
        font-size: large;
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
    <div class="container-fluid" style="overflow:auto;">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a  class="list-group-item active navbar-dark bg-danger" id="home"> <?php echo $_SESSION['username'];?> DashBoard</a>
                    <a href="/gkvhms/admin/admin.php#details" class="list-group-item">Hostel Details</a>
                    <a href="/gkvhms/admin/showstudentquery.php"class="list-group-item"> Student Query Box</a>
                    <a href="/gkvhms/admin/showquery.php" class="list-group-item">Official Query Box</a>
                    <a href="/gkvhms/admin/admin.php#notice" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/admin/admin.php#facilities" class="list-group-item">Facilities</a>
                    <a href="/gkvhms/admin/admin.php#meal" class="list-group-item">Meal Timetable</a>
                    <a href="/gkvhms/official/index.html" target="_blank"class="list-group-item">Official Website</a>
                    
                </div>
                <hr>
                <div class="list-group">
                    <a class="list-group-item active">Other Details</a>
                    <a href="/gkvhms/admin/studentlist.php" class="list-group-item">Registered Student Details</a>
                    <a href="/gkvhms/admin/Allotment.php" class="list-group-item">Hostelers Details</a>
                    <a href="/gkvhms/admin/employeelist.php"class="list-group-item">Employee Detail</a>
                    <a href="/gkvhms/admin/logout.php" class="list-group-item" >Logout</a>
                </div>
            </div>
    <div class="col-md-9" id="home">
                 <h1 style="color:Green; background-color:skyblue; text-align:center; padding:10px 5px">HOME </h1>
             <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../images/stgroup1.jpg" style="height:15rem;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total Employee in Hostel</h5>
        <p class="card-text" style="text-align:center; font-size: 3rem; color: red; font-weight:bold;">

<?php  
//   connecting to databse
    include('../connection.php');
    $conn = OpenCon();
  $query=mysqli_query($conn,"SELECT COUNT(*) as total From `employee`");
  $result=mysqli_fetch_assoc($query);
  echo $result['total'];
?>
</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../images/registration.jpg" style="height:15rem;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total Student Registered</h5>
        <p class="card-text" style="text-align:center; font-size: 3rem; color: red; font-weight:bold;">
        
<?php  

  $query=mysqli_query($conn,"SELECT COUNT(*) as total From `registration`");
  $result=mysqli_fetch_assoc($query);
  echo $result['total'];
?>
</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../images/emp1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total Student Alloted Hostel</h5>
        <p class="card-text" style="text-align:center; font-size: 3rem; color: red; font-weight:bold;">

<?php 
  $query=mysqli_query($conn,"SELECT COUNT(*) as total From `allotedstudent`");
  $result=mysqli_fetch_assoc($query);
  echo $result['total'];
?>

</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../images/doubt.jpg" style="height:15rem;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total Queries Asked By Peoples</h5>
        <p class="card-text" style="text-align:center; font-size: 3rem; color: red; font-weight:bold;">
        
<?php 
  $query=mysqli_query($conn,"SELECT COUNT(*) as total From `query`");
  $result=mysqli_fetch_assoc($query);
  echo $result['total'];

?>
</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../images/query.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total Suggestion given by Hostelers</h5>
        <p class="card-text" style="text-align:center; font-size: 3rem; color: red; font-weight:bold;">
        
<?php 
  $query=mysqli_query($conn,"SELECT COUNT(*) as total From `suggestion`");
  $result=mysqli_fetch_assoc($query);
  echo $result['total'];

?>
</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="../images/complaints.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total Hostelers Complaints</h5>
        <p class="card-text" style="text-align:center; font-size: 3rem; color: red; font-weight:bold;">
<?php 
  $query=mysqli_query($conn,"SELECT COUNT(*) as total From `complaint`");
  $result=mysqli_fetch_assoc($query);
  echo $result['total'];

?>
</p>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<div>
    <h1 style="color:green;background-color:skyblue;padding:10px 5px; text-align:center;border:solid;" id="facilities">Facilities</h1>
    <div class="card mb-3">
  <img src="../images/facilities.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">FACILITIES</h4>
    <p class="card-text textsize">Our Hostel Have Best Outside Environment With  3 Best  And Clean Parks and one big Ground For Playing. Our Hostel Have clean And Green Ecosystem For Peace and Fun Join And Enjoy. Our Hostel Have Well Cleaned Bathrooms And Rooms ALso Our Hostel Have <b>WIFI CAMPUS</b> So You Can Also Enjoy Fast WIFI . Our Hostel Have Best Security In Whole State . Our Hostels Are Well Maintained And Full Secure . Students Are Fully Safe. Hostel Have <b> Biometric Attendance System </b>Also.  If In Anycase You Feel Problem We have Full Support Of teachers And University You can Contact anyone in Anytime Everyone Is free to Help Students.<b>|Learn Enjoy Happy|</b></p>
    <p class="card-text"><small class="text-muted">Best Facilities in this Area</small></p>
  </div>
</div>
</div>
<h1 style="color:green;background-color:skyblue;padding:10px 5px; text-align:center;border:solid;" id="details">Hostel Details</h1>
<div class="table-responsive">
<table class="table table-hover table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">No. Of Blocks</th>
      <th scope="col">Hostel Name</th>
      <th scope="col">No. Of Rooms</th>
      <th scope="col">No. Of Student Accomodation</th>
      <th scope="col">Management Name</th>
      <th scope="col">Hostel Incharge</th>
      <th scope="col">Incharge Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Block 1</th>
      <td>Swami Shardhanand Hostel</td>
      <td>150</td>
      <td>450</td>
      <td>Mr. Vinod</td>
      <td>Proff. Tiwari</td>
      <td>8890765436</td>
    </tr>
    <tr>
      <th scope="row">Block 2</th>
      <td>Pt. Lekhram Hostel</td>
      <td>45</td>
      <td>90</td>
      <td> Mr. Vinod</td>
      <td>Dr. Mayank Aggarwal</td>
      <td>9876543210</td>
    </tr>
    <tr>
      <th scope="row">Block 3</th>
      <td>Gurudutt Hostel</td>
      <td>80</td>
      <td>250</td>
      <td> Mr. Sumit</td>
      <td>Dr.Sunil</td>
      <td>7508256879</td>
    </tr>

  </tbody>
</table>
</div>
<h1 style="text-align:center;color:black;background-color: orange; padding:12px 5px;" id="notice">Notices</h1>
<div class="row" style="margin:auto;text-align:center;">
<div class="col-mb-4" style="margin-left:3rem;">
                <div class="card" style="width: 18rem;">
                    <img src="../images/notice1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">When University Annouce Something Related To Hostel We Take As Responsibilities And Manage that By Notices <br> Here This Notice Is Related To Hostel accommodation all student have to vacate hostel till november 15. </p>
                      <a class="btn btn-primary" href="/gkvhms/images/notice1.jpg" download >Download Image</a>
                    </div>
                  </div>
                 
            </div>
            <div class="col-mb-4"style="margin-left:2rem;">
                <div class="card" style="width: 18rem;">
                    <img src="../images/notice2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Notice Is Related To UP scholarship Here It Tells That how you can apply for UP scholarship.</p>
                      <a class="btn btn-primary" href="/gkvhms/images/notice2.jpg" download >Download Image
                </a>
                    </div>
                  </div>
                 
            </div>
            <div class="col-mb-4"style="margin-left:2rem;">
                <div class="card" style="width: 18rem;">
                    <img src="../images/notice3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">This Notice Is Related To Backlog exam. All student who have backlog will have chance to give offline exam by going to college from 23 november.</p>
                      <a class="btn btn-primary" href="/gkvhms/images/notice3.jpg" download >Download Image
                </a>
                    </div>
                  </div>
                 
            </div>
           
</div>

</div>
<div class="card" >
                <h1 style="color:black;background-color:skyblue;text-align:center;padding:10px 5px;margin-top:1rem;"id="holiday">Holidays Calender</h1>
                <img src="../images/holiday.jpg" alt="holiday" style="align-items:center;width:60%;margin:auto;">
                <a class="btn btn-primary" href="/gkvhms/images/holiday.jpg" download style=" font-size: 20px; font-weight: bold;width:40%;margin:auto;">Download Image</a>
               </div>
               <div class="card">
                <h1 style="color:white;background-color:black; margin-top:2rem;text-align:center;padding:10px 5px;"id="meal">Meal Info</h1>
                <img src="../images/meal.jpg" alt="holiday" style="height:40rem; width:60%; margin:auto;">
                <a class="btn btn-primary" href="/gkvhms/images/meal.jpg" download style=" font-size: 20px; font-weight: bold; width:40%;margin:auto;">Download Image</a>
               </div>
               <h2 style="color: brown; text-align: center; border: solid red; background-color:skyblue; margin-top:20px;">Meal Detail</h2>
               <h5 class="textsize" style="color:red;"> We Follow  Foood Nutririon Standard And Provide Food As Per This Standard To Our Students
                            Because We know That Student Nutrition Should Be Beneficial Because Students Are Our Future. We Also Suggests Our students should try to eat two-and-a-half to three cups of veggies and about two cups of fruit per day, throughout the day. Don't let the amount intimidate you; this is equal to 12 baby carrot sticks, a decently sized salad, and two small pieces of fruit. You can also add veggies and fruits to salads or sandwiches. 
                        </h5>
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
</body>

</html>
