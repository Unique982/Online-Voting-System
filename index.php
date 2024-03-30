<?php
include'header.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location:login.php");
    exit();
}
if(isset($_SESSION['data'])){
$data=$_SESSION['data'];
 if($_SESSION['status']==1){
     $status='Voted';
}
else{
 $status='Not Voted';
 }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<style>
    .voter{
        margin: 10px;
       
    }
   .conatiner{
   
    margin: 10px;
    column-gap: 2px;
   }
</style>
<body>
    <h1>Online Voting System</h1>
    <div class="conatiner">
        <h1>Group</h1>
        <div class="group">
            <?php
            if(isset($_SESSION['group'])){
           $group=  $_SESSION['group'];
           for($i=0;$i<count($group);$i++){
           
            ?>
            <div class="img">
            
               <img src="uploadimg/<?php  echo $group[$i]['photo'];?>" width="200px" height="200px" alt="">
            </div>
            <div class="text">
            <p><b>Name:-</b><?php echo $group[$i]['username'];?></p>
            <p><b>Votes:-</b><?php echo $group[$i]['votes'];?></p>
            </div>
        </div>
        <form action="voting.php" method="POST">
 <input type="hidden" name="vote" value="<?php echo $group[$i]['votes'];?>">
 <input type="hidden" name="id" value="<?php echo $group[$i]['id'];?>">
<?php
if($_SESSION['status'] ==1){
    
?>
<button>vote</button>
<?php }
else{
    ?>
    <button type="submit" style="color:white;background-color:green;padding:10px">vote</button>
    <?php }?>
        </form>
        <?php }}else{
            echo"No group displayed.";
        }
            ?>

        <br><br>
        <hr>
        
        <hr>
        <br><br>
    </div>
        <div class="voter">
            <div class="img">
                <img src="uploadimg/<?php echo $data['photo'];?>" width="200px" height="200px" alt="">
            </div>
            <div class="text">
                <p><b>Name:-</b><?php echo $data['username']; ?></p>
                <p> <b>Email:-</b><?php echo $data['email'];?></p>
                <p><b>Number:-</b><?php echo $data['phone_number']; ?></p>
                <p><b>Status:-</b><?php echo $status; ?></p>
            </div>
        </div>
    </div>
</body>
</html>