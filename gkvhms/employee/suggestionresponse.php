<?php
session_start();
if(!isset($_SESSION['signedin']) || $_SESSION['signedin']!=true){
    echo "<script type='text/javascript'>window.location.href = '../official/employeelogin.php';</script>";
    exit();
}
 //   connecting to databse
 include('../connection.php');
 $conn = OpenCon();
    if($_SERVER['REQUEST_METHOD']=='POST')
            {   $Uname=$_POST['Uname'];
                $Tname=$_POST['TName'];
                $Username=$_POST['username'];
                $Response=$_POST['response'];
                $existsql="SELECT * FROM `employee` where Username='$Username'";
                $sqlresult=mysqli_query($conn,$existsql);
                $numExistRows=mysqli_num_rows($sqlresult);
                if($numExistRows<1)
                    {
                        echo "<script>alert('User not exist Enter Valid Username');window.location='/gkvhms/employee/showstudentquery.php'</script>";
                     
                    }
                else{
                    $sql= " UPDATE `suggestion` SET `Response`= '$Response' ,`TeacherName`='$Tname' WHERE `Username`='$Uname'";
                      $result=mysqli_query($conn,$sql);
                      if($result){
                        echo "<script>alert('Success! Your Response Submitted');window.location='/gkvhms/employee/showstudentquery.php'</script>";
                        }
                       else{
                        echo "<script>alert('Response Not Submitted Due To Technical Issue Please Try Again ! ');window.location='/gkvhms/employee/showstudentquery.php'</script>";
                          }
                     }
             }
?>