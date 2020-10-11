<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo "<script type='text/javascript'>window.location.href = '../official/login.php';</script>";
    exit();
}
 //   connecting to databse
 include('../connection.php');
 $conn = OpenCon();
    if($_SERVER['REQUEST_METHOD']=='POST')
            {   $Tname=$_POST['TName'];
                $Username=$_POST['username'];
                $Uname=$_POST['Uname'];
                $Response=$_POST['response'];
                $existsql="SELECT * FROM `admin` where Username='$Username'";
                $sqlresult=mysqli_query($conn,$existsql);
                $numExistRows=mysqli_num_rows($sqlresult);
                if($numExistRows<1)
                    {
                        echo "<script>alert('User not exist Enter Valid Username');window.location='/gkvhms/admin/showstudentquery.php'</script>";
                     
                    }
                else{
                    $sql= " UPDATE `suggestion` SET `Response`= '$Response' ,`TeacherName`='$Tname' WHERE `Username`='$Uname'";
                      $result=mysqli_query($conn,$sql);
                      if($result){
                        echo "<script>alert('Success! Your Response Submitted');window.location='/gkvhms/admin/showstudentquery.php'</script>";
                        }
                       else{
                        echo "<script>alert('Response Not Submitted Due To Technical Issue Please Try Again ! ');window.location='/gkvhms/admin/showstudentquery.php'</script>";
                          }
                     }
             }
?>