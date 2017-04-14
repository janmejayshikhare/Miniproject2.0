<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="text.css" />
    <link rel="stylesheet" href="960.css" />
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#first").mouseover(function(){
        $("#first").css("background-color", "white");
    });
	
    $("#first").mouseout(function(){
        $("#first").css("background-color", "");
    });
});
$(document).ready(function(){
    $("#second").mouseover(function(){
        $("#second").css("background-color", "white");
    });
	
    $("#second").mouseout(function(){
        $("#second").css("background-color", "");
    });
});
$(document).ready(function(){
    $("#3").mouseover(function(){
        $("#3").css("background-color", "white");
    });
	
    $("#3").mouseout(function(){
        $("#3").css("background-color", "");
    });
});
$(document).ready(function(){
    $("#4").mouseover(function(){
        $("#4").css("background-color", "white");
    });
	
    $("#4").mouseout(function(){
        $("#4").css("background-color", "");
    });
});
$(document).ready(function(){
    $("#5").mouseover(function(){
        $("#5").css("background-color", "white");
    });
	
    $("#5").mouseout(function(){
        $("#5").css("background-color", "");
    });
});
$(document).ready(function(){
    $("#6").mouseover(function(){
        $("#6").css("background-color", "white");
    });
	
    $("#6").mouseout(function(){
        $("#6").css("background-color", "");
    });
});
</script>

</head>
<body>
    <div id="header">
        <div class="container_12"><div class="grid_6"><div class=" logo"><a target="_blank" href="profile.php"><img src="img/student-teacher.png" alt="logo", height="200", width="200"/><img src="img/1.jpg" alt="logo", height="100", width="100"/></a></div></div>
  <p><h1><font color="grey"><B>STUDENT-TEACHER</font><font color="	#0000A0"> PORTAL</B></font></h1></p>
   
  </form></div></div></div></div>
<div id="line"><p class="line1"></p></div>
<div id="navigation"><div class="container_12"><div class="grid_12 top">
<ul class="nav">
<li><a href="profile.php"><strong>HOME</strong></a></li>
<li><a href="login.html"><strong>LOGIN</strong></a></li>
<li><a href="#"><strong>NEW USER? ----> SIGN UP HERE!</strong></a></li>
<li><a href="http://localhost:8080/MiniProject/AboutUs.html""><strong>ABOUT US</strong></a></li>

</ul></div></div></div><div class="silver">
<div id="grey"><div class="container_12">
<div class="grid_12 grey"></div>
<div class="grid_7"><img src="img/2.jpg" alt="img" /></div>
<div class="grid_5">



<font color="grey"></br>The relationship between a student and teacher is that of understanding each other's requirements and coming to provisos with each other's expectations.  
 </br></br>Improving students' relationships with teachers has important, positive and long-lasting implications for both students' academic and social development. 
</br></br> The Student to student interaction is also afftected in a positive manner by student teacher communication and hence, an easy way to keep in touch, a portal.
</br></br> On this portal, students can download all the required content they want and posted by the respective teachers. Attendances and lot more can also be check online.
</br></br> Hence, the portal results to be time saving, efficient and performance enhancing. <font><br /><br /></div>

</div>
<div class="clear"></div>
<div class="grid_12 modern"></div>
</br>
<div id="middle"><div class="layout">
<div class="col1"><div class="wrap"><p class="line1"></p></div></div>
<div class="col2"><span class="text6">Choose Your Department<br />
</span></div>
<div class="col3"><div class="wrap"><p class="line1"></p></div></div></div>
</div>
<div id="grey1"><center>
<div class="container_12"><div class="grid_12 four"></div>
    <a href="comp.html"><button id="first"><div class="grid_3"><span class="text10"><img src="img/comp.png" alt="img" /></br>COMPUTER</span></div></button></a>
<button id="second"><div class="grid_3"><span class="text9"><img src="img/mech.png" alt="img" /></br>Mechanical</span></div></button>
<button id="3"><div class="grid_3"><span class="text8"><img src="img/chem.png" alt="img" /></br>Chemical</span></div></button></br></br></br></br>
<button id="4"><div class="grid_3"><span class="text7"><img src="img/elecx.png" alt="img" /></br>Electronics</span></div></button>
<button id="5"><div class="grid_3"><span class="text8"><img src="img/indus.png" alt="img" /></br>Industrial</span></div></button>
<button id="6"><div class="grid_3"><span class="text10"><img src="img/prod.png" alt="img" /></br>Production</span></div></button>
<div class="grid_3"><p class="text3"></p></div>
<div class="grid_3"><p class="text3"></p></div>
<div class="grid_3"><p class="text3"></p></div>
<div class="grid_3"><p class="text3"></p></div>


</div></center>
<div id="line"><p class="line1"></p></div>
<div id="footer"><div class="container_12"><div class="grid_6 "><div> <img class="logo2" src="img/student.png" alt="img" /></div>



<div class="text12"> Copyright &copy; 2016 All Rights Reserved.</div></div>



</div></div></div>

<div id="profile">
<b id="welcome"></br>Welcome <?php echo $login_session; ?>, You've successfully logged in. </b>
<div align="right"><b id="logout"><a href="logout.php"><input type="submit" style="color: blue; cursor: pointer; font-size: 13px" value="LOGOUT"></a></b></div>
</div>

</body>
</html>
