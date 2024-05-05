<?php 
include'database.php';
    session_start();
if(isset($_POST['login'])){
 $username=$_POST['username'];
//  $email = $_POST['email'];
 $password=$_POST['password'];
 $standard = $_POST['standard'];
 $sql="SELECT * FROM user where username='$username' AND password='$password' AND standard='$standard'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
    $sql="SELECT username,photo,votes,id from user where standard='group'";
    $result1=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result1)>0){
        $group=mysqli_fetch_all($result1,MYSQLI_ASSOC);//all group  present in store 
      $_SESSION['group']=$group;
    }
    $data=mysqli_fetch_array($result);//single user
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['data']=$data;
    echo'<script>alert("Invalid login")</script>';
    header("location:index.php");
 }else{
    echo'<script>alert("Invalid login")</script>';
    

 }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    body{
        background-image: url("https://t4.ftcdn.net/jpg/04/83/32/57/360_F_483325706_Yy9uS1qzLVKPeNZvefGfJnhscRDb6VW8.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;


    }
</style>
<body>
<div class="container bg.transparent" style="margin-top:100px;">
   <div class="row">
    <div class="col-md-5 mx-auto">
        <div class="card mt-">
            <div class=" card-header bg-primary text-center" style="font-size:30px; font-weight:bold;font-family:'Times New Roman';color:#eee;">
                Login Page
            </div>
            <div class="card-body">
            <form action="login.php" method="POST" enctype="multipart/form-data" autocomplete="off">   
        <div class="form-group">
           <label for="input">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Your Username...">
                 <!-- <i class="fa-regular fa-user"></i> -->
            </div>
            <div class="form-group">
        <label>Select:</label>
        <select name="standard" id="" class="form-control">
        <option disabled selected>Select</option>
            <option value="Voter">Voter</option>
            <option value="Group">Group</option>
        </select>
       </div>
            <div class="form-group">
            <label for="input">Password</label>
                <input type="password" name="password" id="pw" class="form-control" placeholder="Enter Password">
               
                <!-- <i class="fa-regular fa-eye" id="icon" onclick=showPassword()></i> -->
            </div>
            
            <div class="form-check">
                    <input type="checkbox" class="form-control-input">
                    <label for="form-check-label" for="disabledFieldsetCheck">Remeber me</label>
             
            </div>
            
            <!-- <a href="forgot.html" >Forgot Password ?</a> -->
         
           
            <input type="submit" name="login" value="Login" class="btn bg-primary w-100" style="font-size:20px;font-weight:400;font-family:'Times New Roman'; color:#fff;">
          <div class="form-group">
            Don't have account ? <a href="register.php">Register</a>
          </div>
        </form>
            </div>
        </div>
    </div>
   </div>
       
        </div>
  
    <!-- <script>
        function showPassword(){
            var inputPw=document.getElementById('pw');
            var icon = document.getElementById('icon');

            if(inputPw.type==="password"){
                icon.className="fa-solid fa-eye-slash";
                inputPw.type="text";
            }
            else{
                icon.className="fa-regular fa-eye";
                inputPw.type="password"
               
            }
        }
    </script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
