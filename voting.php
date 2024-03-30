<?php
session_start();
include 'database.php';
$votes=$_POST['vote'];
$totalvotes=$votes+1;
 $id=$_POST['id'];
 $uid=$_SESSION['id'];
 $updatevotes= mysqli_query($conn,"update user set votes='$totalvotes' where id='$id'");
 $updatestatus= mysqli_query($conn,"update user set status=1 where id='$uid'");

if($updatevotes and $updatestatus){
    $getgroup=mysqli_query($conn,"select username,photo,votes,id from user where standard='group'");
    $group=mysqli_fetch_all($getgroup,MYSQLI_ASSOC);
    $_SESSION['group']=$group;
    $_SESSION['status']=1;
    echo '<script>alert("Voting Successfully..")</script>';
    header("location:index.php");

}else{
    echo '<script>alert("Sorry Error !! Vote after sometime")</script>';
    header("location:index.php");
}



?>