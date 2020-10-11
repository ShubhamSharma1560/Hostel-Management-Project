<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']!=true){
    echo "<script type='text/javascript'>window.location.href = '../official/studentlogin.php';</script>";
    exit();
}
 //   connecting to databse
 include('../connection.php');
 $conn = OpenCon();
    if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $Username=$_POST['username'];
                $Password=$_POST['password'];
                $Password=md5($Password);
                $existsql="SELECT * FROM `allotedstudent` where `passcode`='$Password' AND `Username`='$Username'";
                $sqlresult=mysqli_query($conn,$existsql);
                $numExistRows=mysqli_num_rows($sqlresult);
                if($numExistRows<1)
                    {
                        echo "<script>alert(' Username or Password Not Matched Please Enter Valid Credentials!');window.location='/gkvhms/student/suggestioncomplaint.php'</script>";
                     
                    }
                else{
                    $sql= "DELETE FROM `suggestion` WHERE `Username`='$Username'";
                      $result=mysqli_query($conn,$sql);
                      if($result){
                        echo "<script>alert('Success! Your Suggestion Deleted Successfully!');window.location='/gkvhms/student/suggestioncomplaint.php'</script>";
                        }
                       else{
                        echo "<script>alert('Your Suggestion Not Deletd Due To Technical Issue Please Try Again ! ');window.location='/gkvhms/student/suggestioncomplaint.php'</script>";
                          }
                     }
            }
?>