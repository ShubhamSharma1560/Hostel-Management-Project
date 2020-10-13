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
 //   connecting to databse
 include('../connection.php');
 $conn = OpenCon();
    // submitting to database
    $sql="INSERT INTO `query`(`Name`, `Email address`,`Address`, `Query Relation`,`State`,`Contact No.`,`City`, `Detailed Query`)  VALUES('$Name','$Email','$Address','$Query','$State','$Contact','$City','$Detail')";
    $result=mysqli_query($conn,$sql);
    if($result){
      echo "<script>alert('Success! Your Response submitted');window.location='/gkvhms/official/index.html'</script>";
      }
    else {
      echo "<script>alert('Response Not Submitted Due To Technical Issue Please Try Again ! ');window.location='/gkvhms/official/index.html#Query'</script>";
        }
  }
?>