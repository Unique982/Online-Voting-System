<?php 
include'database.php';
if(isset($_POST['submit'])){
  $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
  $username =mysqli_real_escape_string($conn,$_POST['username']);
  $email =mysqli_real_escape_string($conn,$_POST['email']);
  $phone =mysqli_real_escape_string($conn,$_POST['phone']);
  $standard =mysqli_real_escape_string($conn,$_POST['standard']);
  $image=$_FILES['image']['name'];
  $tmp=$_FILES['image']['tmp_name'];
  $password =mysqli_real_escape_string($conn,$_POST['password']);
  $cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']);
 

if($password!=$cpassword){
    echo '<script>
    alert("password do not match");
    </script>';
    header("location:login.php");
}
else{
  move_uploaded_file($tmp,"uploadimg/".$image);
 
    $sql ="insert into user(Full_name,username,email,phone_number,standard,status,votes,password,photo)VALUES('{$fullname}','{$username}','{$email}','{$phone}','{$standard}',0,0,'{$password}','{$image}')";
 $result=mysqli_query($conn,$sql);
    if($result){
header("location:login.php");
echo"<script>alert('New User add')</script>";
}
}

}

?>