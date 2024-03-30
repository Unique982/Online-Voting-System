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

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="from">
        <h1>Login</h1>
        <form action="login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="input-box">
                <input type="text" name="username">
                <label for="input">Username</label>
                <i class="fa-regular fa-user"></i>
            </div>
            <div class="input-box">
        <label>Select:</label>
        <select name="standard" id="">
            <option value="Voter">Voter</option>
            <option value="Group">Group</option>
        </select>
       </div>
            <div class="input-box">
                <input type="password" name="password" id="pw">
                <label for="input">Password</label>
                <i class="fa-regular fa-eye" id="icon" onclick=showPassword()></i>
            </div>
            
            <div class="remeber-me">
                <div class="remeber">
                    <input type="checkbox">Remeber me
                </div>
                <a href="forgot.html">Forgot Password ?</a>
            </div>
            <input type="submit" name="login" value="login" class="submit-btn">
          <div class="account">
            Don't have account ? <a href="register.php">Register</a>
          </div>
        </form>
        </div>
    </div>
    <script>
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
    </script>
</body>
</html>