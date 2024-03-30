<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
</head>
<body>
    <div class="container">
        <div class="form">
        <h1>Register From</h1>
       <form action="Reg_From_Save.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="input-box">
            <label>Full Name:</label>
            <input type="text" name="fullname" placeholder="Enter Your Full Name">
            <span style="color: red;">*</span>
        </div>
       <div class="input-box">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter Your Username">
        <span style="color: red;">*</span>
       </div>
       <div class="input-box">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter Your Email">
        <span style="color: red;">*</span>
       </div>
       <div class="input-box">
        <label>Photo:</label>
        <input type="file" name="image">
        <span style="color: red;">*</span>
       </div>
       <div class="input-box">
        <label>Phone Number;</label>
        <input type="number" name="phone">
        <span style="color: red;">*</span>
       </div>
       <div class="input-box">
        <label>Select:</label>
        <select name="standard" id="">
            <option value="Group">Group</option>
            <option value="Voter">Voter</option>
        </select>
       </div>
       <div class="input-box">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your Password">
        <span style="color: red;">*</span>
       </div>
       <div class="input-box">
        <label>Confrom Password:</label>
        <input type="password" name="cpassword" placeholder="Enter Your Confrom..">
        <span style="color: red;">*</span>
       </div>
       <input type="submit" name="submit">
       <div class="account">
            <p>Already Have an account? <a href="login.html">Login</a></p>
          </div>   
    </form>
    </div>
    </div>
    
</body>
</html>