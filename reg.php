<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" href="l.css" />
<link rel="icon" href="Images/ff.png" type="image/png">
<title>REGIS SIT</title>
</head>
<body>
<div class="image-container">
    <img src="d.jpg" class="image" alt="Background Image">
    <div class="lights"></div> 
</div>
    <div class="login">

<?php
require('konek.php');
if (isset($_POST['username']))
{
    $var = 0;
    if(isset($_POST['Email']))
    {
    $username = ($_POST['username']);
    $Email = ($_POST['Email']);
    $password = ($_POST['password']);
    
    if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        $msg = 'The Email you have entered is invalid, please try again.';
        echo $msg;
    }else{

        $query = "INSERT INTO `users` (`username`, `password`, `Email`) VALUES ('$username', '$password', '$Email');"; 
        $result1 = mysqli_query($conn,$query);

        if($result1)
        {
            echo "<div class='form'>
            <h3>ReGIStrasi Sukses aLIas BerHASil.</h3>
            <br/>Klik ini buat login kuy <a href='login.php'>Login</a></div>";
        }
  }  
  $conn->close();
    }
        }
else{
?>

<div class="register"> 
        <div class="form">
            <h1>Register</h1>
            <form name="registration" action="" method="post">
                <input type="text" name="username" placeholder="Username" required />
                <input type="email" name="Email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="submit" value="Register" />
                <div class="login-link">
                    <span>Sudah punya akun? </span><a href="login.php">Login</a>
                </div>
</form>
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