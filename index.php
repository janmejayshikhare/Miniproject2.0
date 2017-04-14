<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<html>
    <title>Teacher Login</title>
<body>
<div id="main">
    <center><h2><font color="blue">TEACHER </font>LOGIN</h2>
        <img src="teacher2.png" alt="" height="100" width="100"/></br></br></br></br>
<div id="login">

<form action="" method="post">
<label>First Name :</label>
<input id="name" name="username" placeholder="username" type="text"></br></br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"></br></br>
<input type="submit" style="color: blue; cursor: pointer; font-size: 10px" name="submit" id="add" value="LOGIN">
</center>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>

</html>
 