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
                    <a class="nav-link" href="/gkvhms/student/student.php#facilities" >Facilities</a>
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
                    <a href="" class="list-group-item active navbar-dark bg-dark">QUERIES</a>
                    <a href="/gkvhms/student/Allotment.php"class="list-group-item">Hostel Allotment Student List</a>
                    <a href="/gkvhms/student/complaint.php" class="list-group-item">File COMPLAINT</a>
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
          <div class="col-md-9" id="home"><h1 style="color:green;text-align:center;">Facts About Hostel Life.</h1>
          <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Fact No. - 1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      Hostliers learn about jugaads, independence, finance, management and many more, but most importantly they learn about life. Also, they realize how their maa ke haath ka khaana is the best in the world. For all the outstation students out there, here are some facts about hostel life that will surely ring a bell.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Fact No. - 2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      The mess : The first thing that comes to mind after hearing the word “hostel” is the mess. The abode of “delicious” food that is one of a kind ( in the literal sense!). No master chef can whip out such delicacies.. The dosas and puris are like boats floating on water, except that the water here is oil.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Fact NO. - 3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      Room : Hostel life teaches us the art of living. That is, living with others and the joys of sharing.<br> Can’t find your shirt after you left it to dry?<br> *Finds a room mate wearing it*<br> Or you have that big date coming up - chal bhai, woh black blazer dena!
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
          Fact No. - 4
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
      Jugaads : Living away from home teaches us a lot of things. It is like being stranded on a desolate island- we look for means to survive. Similarly, hostel life teaches you just that, except that you are surrounded by your room mates to provide you some company. Within a short time, you become the baap of jugaads! <br> ( innovation redefined!)
      </div>
    </div>
  </div>
</div>
<div class="card mb-3">
  <img src="../images/Hostlers.jpg" style="height:30rem;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="color:orange;">Hostel Definition</h5>
    <p class="card-text">A hostel is a form of low-cost, short-term shared sociable lodging where guests can rent a bed, usually a bunk bed in a dormitory, with shared use of a lounge and sometimes a kitchen. Rooms can be mixed or single-sex and have private or shared bathrooms. Private rooms may also be available, but the property must offer dormitories to be considered a hostel.[</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
      </div>
      </div>
      <div>
    <h1 style="color:green;background-color:skyblue;padding:10px 5px; text-align:center;border:solid;" id="facilities">Facilities</h1>
    <div class="card mb-3">
  <img src="../images/facilities.png" class="card-img-top" alt="Facilities">
  <div class="card-body">
    <h4 class="card-title">FACILITIES</h4>
    <p class="card-text">Our Hostel Have Best Outside Environment With  3 Best  And <b>Clean Parks and one big Ground For Playing </b>Our Hostel Have clean And Green Ecosystem For Peace and Fun Join And Enjoy. Our Hostel Have Well <b>Cleaned Bathrooms And Rooms Also.</b> Our Hostel Have <b>WIFI CAMPUS</b> So You Can Also Enjoy Fast WIFI . Our Hostel Have <b>Best Security </b>In Whole State . Our Hostels Are Well Maintained And Full Secure . Hostel Have <b> Biometric Attendance System </b>Also. Students Are Fully Safe. If In Anycase You Feel Problem We have Full Support Of teachers And University You can Contact anyone in Anytime Everyone Is free to Help Students.<b>|Learn Enjoy Happy|</b></p>
    <p class="card-text"><small class="text-muted">Best Facilities in this Area</small></p>
  </div>
</div>
</div>
              <div class="card">
                <h1 style="color:black;background-color:skyblue; text-align:center;padding:10px 5px;"id="holiday">Holidays Calender</h1>
                <img src="../images/holiday.jpg" alt="holiday" style="height:45rem;">
                <a href="/gkvhms/images/holiday.jpg" download style="margin-left: 40%; color:red; font-size: 30px; font-weight: bold;">Download Image</a>
               </div>
      </div>
            <div class="card">
                <h1 style="color:white;background-color:black; text-align:center;padding:10px 5px;"id="meal">Meal Info</h1>
                <img src="../images/meal.jpg" alt="holiday" style="height:45rem;">
                <a href="/gkvhms/images/meal.jpg" download style="margin-left: 40%; color:red; font-size: 30px; font-weight: bold;">Download Image</a>
               </div>
               <h1 style="color: darkorchid; text-align: center; border: solid; margin-top:20px;">Meal Detail</h1>
               <h3 style="color:green;"> We Follow  Foood Nutririon Standard And Provide Food As Per This Standard To Our Students
                            Because We know That Student Nutrition Should Be Beneficial Because Students Are Our Future. We Also Suggests Our students should try to eat two-and-a-half to three cups of veggies and about two cups of fruit per day, throughout the day. Don't let the amount intimidate you; this is equal to 12 baby carrot sticks, a decently sized salad, and two small pieces of fruit. You can also add veggies and fruits to salads or sandwiches. 
                        </h3>
               <h1 style="color:green;background-color:cyan; text-align:center;padding:10px 5px;"id="notice">Notice Board</h1>
               <div class="row" style="background-color:skyblue;">
               <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="../images/notice1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">When University Annouce Something Related To Hostel We Take As Responsibilities And Manage that By Notices <br> Here This Notice Is Related To To Covid-19 So We Want To Tell YOu That Immediate Go to Your Home And Complete Hostel will Close Till Next Orders.</p>
                    </div>
                  </div>
                  <a href="/gkvhms/images/notice1.jpg" download style=" color: chocolate; font-size: 30px; font-weight: bold;">Download Image</a>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="../images/notice2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Notice Is Related To Annual Exam Here It Tells That Annual Exam Will Held From Mid July.</p>
                    </div>
                  </div>
                  <a href="/gkvhms/images/notice2.jpg" download style="color: chocolate; font-size: 30px; font-weight: bold;">Download Image
                </a>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="../images/notice3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">This Notice Is Related To College Fees . So we Provide Every Meeting Decision By Notices Here It Tells That Every Student Have To give fees of Annual Exam.</p>
                    </div>
                  </div>
                  <a href="/gkvhms/images/notice3.jpg" download style=" color: chocolate; font-size: 30px; font-weight: bold;">Download Image
                </a>
            </div>
    </div>
    <h1 style="color:green;background-color:orange;padding:10px 5px; text-align:center;border:solid;" id="contact">Contact Lists</h1>
<div class="table-responsive">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Hostel Duty Teacher</th>
      <th scope="col">Hostel Incharge</th>
      <th scope="col">Hostel Administrative</th>
      <th scope="col">University Officials</th>
      <th scope="col">Police No.</th>
      <th scope="col">Ambulance No.</th>
      <th scope="col">Fire Emergency</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>9766463168</td>
      <td>8548989488</td>
      <td>9816516848</td>
      <td>0196487836</td>
      <td>100</td>
      <td>108</td>
      <td>101</td>
    </tr>
    <tr>
      <th scope="row"> 2</th>
      <td>8574123669</td>
      <td>9875654100</td>
      <td>889746621</td>
      <td>632158998</td>
      <td>100</td>
      <td>102/108</td>
      <td>101</td>
    </tr>
  </tbody>
</table>
</div>
<p style="color: red; font-size:20px; background-color: black; margin-bottom:10px; padding:10px 5px;">You Can Use These Contacts For Any Help Or any other Query !!! <br>
There Is NO any Guarantee That These Phone No. will work Properly If anythong  Wrong then You Can Contact to administrative For Other Action </p>
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