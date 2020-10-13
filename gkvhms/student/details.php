<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']!=true)
{
    echo "<script type='text/javascript'>window.location.href = '../official/studentlogin.php';</script>";
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
  <title>GurukulStudent</title>
</head>

<body>
  <header id="header">
    <div class="container-fluid" style="display: flex;">
      <div id="logo" class="col-lg-3 col-md-3 logo"><a href="https://www.gkv.ac.in/"><img src="../images/logo.png"></a>
      </div>
      <div id="gkv" class="col-lg-6 col-md-6 U-name text-center"><a href="https://www.gkv.ac.in/"><img id="gkv"
            src="../images/gkv-un.png"></a></div>
      <div id="media" class="col-lg-3 col-md-3 founder text-right"><a href="https://www.gkv.ac.in/" target="_blank"><img
            src="../images/gkv-founder.png"></a></div>
    </div>
  </header>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a style="display: flex;" class="navbar-brand" href="/gkvhms/student/student.php"
      style="font-size:1.55rem;color:royalblue ;">

      <img src="../images/GKV.jpg" width="50" height="50" class="d-inline-block rounded-circle" alt="GKV">
      <p style="color: blueviolet; margin: 10px;">GKV Student DashBoard</p>
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
    <div class="container-fluid" style="overflow:auto;">
        <div class="row">
            <div class="col-md-3">
            <div class="list-group">
                    <a class="list-group-item active "><?php echo $_SESSION['username'];?> DashBoard</a>
                    <a href="/gkvhms/student/suggestioncomplaint.php"  class="list-group-item "> Complaint Response</a>
                    <a href="/gkvhms/student/suggestioncomplaint.php"  class="list-group-item "> Suggestion Response </a>
                    <a href="/gkvhms/student/student.php#meal"  class="list-group-item">Meal Info</a>
                    <a href="/gkvhms/student/student.php#notice" class="list-group-item">Notice Board</a>
                    <a href="/gkvhms/student/student.php#holiday"   class="list-group-item">Holiday Calender</a>
                    <a href="/gkvhms/student/student.php#contact"class="list-group-item">Emergency Contacts</a>   
                    <a href="/gkvhms/official/index.html"target="_blank"class="list-group-item">Official Website</a> 
                </div>
           
                <hr>
                <div class="list-group">
                    <a href="" class="list-group-item active navbar-dark bg-dark">QUERIES</a>
                    <a href="/gkvhms/student/Allotment.php"class="list-group-item">Hostel Allotment Student List</a>
                    <a href="/gkvhms/student/complaint.php" class="list-group-item">File COMPLAINT</a>
                    <a href="/gkvhms/student/suggestion.php" class="list-group-item "> Any SUGGESTION</a>
                    <a href="/gkvhms/student/studentlogout.php" class="list-group-item">LOGOUT</a>
                </div>
            </div>
            <div class="col-md-9" id="holiday">
                <div class="card">
                <h1 style="color:blue;background-color:skyblue; text-align:center;padding:10px 5px;"id="holiday"> Your Details</h1>
            <?php
            //   connecting to databse
    include('../connection.php');
    $conn = OpenCon();
                $query="SELECT `SerialNo`,`FirstName`,`LastName`,`FatherName`,`Address`,`ParentMobNo`,`Email`,`DOB`,`Contact`,`Category`,`Marks`,`Username`,`Branch`,`YearOfStudy`,`Hostel` FROM `allotedstudent` where `Username`= '{$_SESSION['username']}'";
                $result=mysqli_query($conn,$query);
            ?>
        <table class="table table-sm table-responsive table-hover table-secondary table-bordered">
            <thead>
                <tr>
                    <th scope="col">SerialNo</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">FatherName</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB </th>
                    <th scope="col">Parent Mobile No. </th>
                    <th scope="col">Contact</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Username</th>
                    <th scope="col">Category</th>
                    <th scope="col">Branch</th>
                    <th scope="col">YearOfStudy</th>
                    <th scope="col">Hostel</th>
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
                    <td><?php echo $rows['FatherName']; ?></td>
                    <td><?php echo $rows['Address']; ?></td>
                    <td><?php echo $rows['Email']; ?></td>
                    <td><?php echo $rows['DOB']; ?></td>
                    <td><?php echo $rows['ParentMobNo']; ?></td>
                    <td><?php echo $rows['Contact']; ?></td>
                    <td><?php echo $rows['Marks']; ?></td>
                    <td><?php echo $rows['Username']; ?></td>
                    <td><?php echo $rows['Category']; ?></td>
                    <td><?php echo $rows['Branch']; ?></td>
                    <td><?php echo $rows['YearOfStudy']; ?></td>
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