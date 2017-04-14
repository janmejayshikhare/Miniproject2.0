<?php 
require_once("includes/db_connection.php");
require_once("includes/functions.php");
$files = fetch_all_files();
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <center><h1><font color="blue"> UPLOAD  </font>FILES</h1>
        <img src="Upload-128.png" alt=""/></br>
        <h2>Select file to upload</h2>
	<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
	<tr> 
		<td width="246">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000000000">
			<input name="userfile" type="file" id="userfile"> 
		</td>
		<td width="80">
		<input name="upload" type="submit" class="box" id="upload"  style="color: blue; cursor: pointer; font-size:13px" value="Upload">
		</td>
	</tr>
	</table></center>
</form>

<?php while($file = $files->fetch_assoc()) { ?>
	<br /></br>Download File:
	<a href="<?php echo $file["file_path"]; ?>"><?php echo $file["file_name"]; ?></a>
<?php } ?>

</body>
</html>