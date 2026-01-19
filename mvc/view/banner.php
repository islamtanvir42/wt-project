<!DOCTYPE html>
<html>
<head>
  <title>ANS HOSPITAL</title>
  <style>
    body { 
      background-image: url('bannerImg.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%; 
      position: relative; 
    }

    #reg {
      position: absolute; 
      top: 10px;
      right: 100px; 
      margin: 0px; 
    }

        #login {
      position: absolute; 
      top: 10px; 
      right: 20px; 
      margin: 0px; 
    }
  </style>
</head>
<body>

  <h2 id="login"><a href="UserLogin.php">Login</a></h2>
  <h2 id="reg"><a href="Registration.php">Registration</a></h2>

</body>

<?php
    include('footer.php');
?>
</html>
