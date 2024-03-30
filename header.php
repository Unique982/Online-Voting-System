<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Playfair', sans-serif;
    text-decoration: none;
}
header{
    position:fixed ;
    top: 0;
    left: 0;
    width: 100%;
    padding: 8px;
    background-color: darkorange;
}
.navbar{
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
}
.navbar .logo{
    color:rgb(0,255,0);
    font-weight: 600;
    font-size:1.6rem;
    text-transform: uppercase;
    text-decoration: none;
} 
 span{
    color: blue;
}
 .navbar .menu-item{
    display: flex;
    list-style: none;
    gap: 35px;
    font-size: 20px;
    
}
.navbar  a{
    color: #020000;
    text-decoration: none;
    transition: 0.2s ease;
}
.navbar a:hover,.navbar a.active{
    border-bottom:2px solid red;
}

#close-menu-btn{
  position: absolute;
    right: 20px;
    top: 20px;
    cursor: pointer;
    display:none;
}
#menu-btn{
    font-size: 25px;
    cursor: pointer;
  display: none;
    
}


</style>
<body>
<header>
    <nav class="navbar">
        <a href="#index.html" class="logo">Online<span>Voting System.</span></a>

     <ul class="menu-item">
        <span class="fa-solid fa-xmark" id="close-menu-btn"></span>
        <li><a href="#index.html" class="active">Home</a></li>
        <li><a href="#about.php">About</a></li>
        <li><a href="logout.php">Logout</a></li>

     </ul>

     <span class="fa-solid fa-bars" id="menu-btn"></span>
   
    </nav>
 </header>

    
</body>
</html>