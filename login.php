<?php
$logger=false;
$wrong_login=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'please.php';
    $naam=$_POST["username"];
    $pass=$_POST["password"];
    $sql="Select * from clients where username='$naam' AND password='$pass'";
    $result=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $logger=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['name']=$naam;
        header("location: welcome.php");
    }
    else{
        $wrong_login=true;
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Sidebar/sidebar.css">
    <link rel="stylesheet" href="login_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav>
    <ul class="sidebar">
        <li onclick="closeSidebar(event)"><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="white" d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li><a href="/gamebaaz/index.php">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contacts</a></li>
        <li><a href="">News</a></li>
        <li><a href="">Offers</a></li>
    </ul>
    <ul>
        <li><a href=""><strong>GamesX</strong></a></li>
        <li class="hideOnMobile"><a href="/gamebaaz/index.php">Home</a></li>
        <li class="hideOnMobile"><a href="">About</a></li>
        <li class="hideOnMobile"><a href="">Contacts</a></li>
        <li class="hideOnMobile"><a href="">News</a></li>
        <li class="hideOnMobile"><a href="">Offers</a></li>
        <li class="open_button" onclick="openSidebar(event)"><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path fill="white" d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
    </ul>
</nav>
    <?php
    if($logger==true){
        echo"$usernaam<div><h1> youre logged in now   </h1></div>";
    }
    if($wrong_login==true){
        echo'<div><h1> Incorrect Password, Try Again! </h1></div>';
    }
   
    ?>

    
    <div class="main">
        <div class="heading">
            <h1>LogIn Please</h1>
        </div>
        <br>
        <div class="login">
            <form action="/gamebaaz/login.php" method="post">
                <label for="username">Username :</label>
                <input type="email" id="username" name="username">
                <br><br>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
                <br><br>
                <button type="submit" id="submit">Log In</button>
            </form>
        </div>
    </div> 
</body>
</html>