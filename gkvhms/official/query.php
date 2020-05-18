<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{  
    $Name=$_POST['name'];
    $Address=$_POST['address'];
    $Email=$_POST['email'];
    $Query=$_POST['query'];
    $State=$_POST['state'];
    $City=$_POST['City'];
    $Contact=$_POST['Phone'];
    $Detail=$_POST['querydetail'];
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
    // submitting to database
    $sql="INSERT INTO `query`(`Name`, `Email address`,`Address`, `Query Relation`,`State`,`Contact No.`,`City`, `Detailed Query`)  VALUES('$Name','$Address','$Email','$Query','$State','$Contact','$City','$Detail')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "<script>alert('Success! Your Response submitted');window.location='/gkvhms/official/index.html'</script>";
      }
    else {
      echo "<script>alert('Response Not Submitted Due To Technical Issue Please Try Again ! ');window.location='/gkvhms/official/index.html#Query'</script>";
        }
  }
}
?>