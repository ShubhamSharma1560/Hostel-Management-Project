<?php
session_start();
if(!isset($_SESSION['signedin']) || $_SESSION['signedin']!=true){
    header("location : /gkvhms/official/employeelogin.php");
    exit;
}
$servername="localhost";
$username="root";
$password="";
$database="gkvhms";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  die("Sorry connection to database is not established:".mysqli_connect_error());
}
else
{
      if($_SERVER['REQUEST_METHOD']=='POST')
        {  $Uname=$_POST['Uname'];
          $Tname=$_POST['TName'];
           $Username=$_POST['username'];
           $Response=$_POST['response'];
           $existsql="SELECT * FROM `employee` where `Username`='$Username'";
           $sqlresult=mysqli_query($conn,$existsql);
           $numExistRows=mysqli_num_rows($sqlresult);
           if($numExistRows<1)
               {
                     echo "<script>alert('User not exist Enter Valid Username');window.location='/gkvhms/employee/showstudentquery.php'</script>";
                     
               }
            else{
                  $sql= " UPDATE `complaint`SET `Response`= '$Response',`TeacherName`='$TName' WHERE `Username`='$Uname'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                      echo "<script>alert('Success! Your Response Submitted');window.location='/gkvhms/employee/showstudentquery.php'</script>";
                      }
                     else{
                      echo "<script>alert('Response Not Submitted Due To Technical Issue Please Try Again ! ');window.location='/gkvhms/employee/showstudentquery.php'</script>";
                        }
                }
            }
    }
?>