<html>
   
   <head>
      <title>Sign Up</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {

               
               $username = addslashes ($_POST['username']);
               $password = addslashes ($_POST['password']);
            }else {
               $id = $_POST['id'];
               $username = $_POST['username'];
               $password = $_POST['password'];
            }
            
            
            
            $sql = "INSERT INTO login ". "(id,username,password) ". "VALUES('$','$username','$password')";
               
            mysql_select_db('company');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            header("Location:profile.php");
            
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                      <center> <h1><font color="blue">SIGN </font>UP</h1></br><font color="grey">Student-Teacher Portal</font> </center>
                     
                      <form>
	</br></br><center>First Name: <input type="text" name="username" id="username" />
	</br></br>Last Name: <input type="text" name="lastname" /></br></br>
	GR Number: <input type="text" name="grno" /></br></br>
	Password: <input type="password" name="password" id="add" /></center></br>
	<center><h2>
                <input type="submit" style="color: blue; cursor: pointer; font-size: 16px" name="add" id="add" value="SIGN UP"></h2></center>
            
                      </form>
</form>

            
            <?php
         }
      ?>
   
   </body>
</html>
 