<!DOCTYPE HTML>
<html>

<!------ HEAD tag ---------->
<link rel = "stylesheet" type = "text/css" href = "css/login.css" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!------ /HEAD tag ---------->
<?php include 'config.php'; ?>

<body>
<a href="index.php"><img src="img/home.png" style="height: 30px; width:30px; float:left;"  id="icon" alt="HOME" title="HOME" /></a>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/vinayagar.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="" action="home.php">
	<input type="text" id="login" class="fadeIn second" name="login" placeholder="LOGIN" value="">
      <input type="text" id="password" class="fadeIn third" name="passw" placeholder="PASSWORD" value="">
      <input name="submit" type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="fpass.php">Forgot Password?</a>
    </div>

  </div>
</div>




</body>
</html>