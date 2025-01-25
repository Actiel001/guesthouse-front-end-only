<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="l.css">
    <title>LOgin COG!</title>
    <link rel="icon" href="Images/ff.png" type="image/png">

</head>
<body>
<div class="image-container">
    <img src="e.jpg" class="image" alt="Background Image">
    <div class="lights"></div> 
</div>

<div class="login">
<?php
require('konek.php');
session_start();

if (isset($_POST['username'])){

    $username = $_REQUEST['username'];
	$password = ($_REQUEST['password']);
   
    $query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='' + '$password'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index5.html");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Klik untuk login lagi <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login"/>
</form>
<p>Beklum Register kah? <a href='reg.php'>Register</a></p>
</div>
<?php } ?>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
    const lightsContainer = document.querySelector('.lights');
    
    function createLight() {
        const light = document.createElement('div');
        light.classList.add('light');
        
        let xPos = Math.random() * 100;  
        let yPos = Math.random() * 100;  
        light.style.left = `${xPos}%`;
        light.style.top = `${yPos}%`;
        
        let size = Math.random() * 20 + 10; 
        light.style.width = `${size}px`;
        light.style.height = `${size}px`;
        
        lightsContainer.appendChild(light);
        
        setTimeout(() => {
            light.remove();
        }, 2000); 
    }

    setInterval(createLight, 200);
});

</script>
</body>
</html>