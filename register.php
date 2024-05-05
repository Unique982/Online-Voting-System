<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        font-size: 18px;
    }
    
  </style>
  <body>
  <div class="container">
      <form action="Reg_From_Save.php"  method="POST" enctype="multipart/form-data" autocomplete="off">
       <h1 style="text-align:center; font-size:30px; font-weight:bold; color:black;">Registration Form</h1>
      <div class="row jumbotron"> 
        <div class=" col-md-6">
            <label>Full Name:</label>   <span style="color: red;">*</span>
            <input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name">
        </div>

       <div class="col-md-6">
        <label>Username:</label><span style="color: red;">*</span>
        <input type="text" name="username" class="form-control" placeholder="Enter Your Username">
       </div>
     
       <div class="col-md-6">
        <label>Email:</label>   <span style="color: red;">*</span>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
       </div>

       <div class="col-md-6">
        <label>Phone Number:</label> <span style="color: red;">*</span>
        <input type="number" name="phone" class="form-control" placeholder="Enter Your Number">
       </div>

       <div class="col-md-6">
        <label>Photo:</label>  <span style="color: red;">*</span>
        <input type="file" name="image" class="form-control-file">
       </div>
     
       <div class="col-md-6">
        <label>Select:</label>       <span style="color: red;">*</span>
        <select name="standard" id="" class="form-control">
        <option disabled selected>select one option</option>
            <option value="Group">Group</option>
            <option value="Voter">Voter</option>
        </select>
       </div>
       <div class="col-md-6">
        <label>Password</label> <span style="color: red;">*</span>
        <input type="password" name="password" class="form-control" placeholder="Enter your Password">
 
       </div>
       <div class="col-md-6">
        <label>Confrom Password:</label> <span style="color: red;">*</span>
        <input type="password" class="form-control" name="cpassword" placeholder="Enter Your Confrom..">
        
       </div>
       <div class="col-md-12" style="margin-top:20px; text-align:center">
       <input type="submit" name="submit" class="btn btn-primary text-light">
       </div>
       <div class="col-md-12" style="text-align:center;">
            <p>Already Have an account? <a href="login.php">Login</a></p>
          </div>  
          </div> 
    </form>
               
        
      
    </div>

    
</body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
