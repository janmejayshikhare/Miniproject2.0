<?php 
require_once("includes/db_connection.php");
require_once("includes/functions.php");
$target_dir = "uploads/";
$target_file_name = basename($_FILES["userfile"]["name"]);
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

echo $fileType;

// Check if the file already exists
if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
}

// Limit File Size
if ($_FILES["userfile"]["size"] > 2000000000000) {
	echo "Sorry, your file is too large.";
	$uploadOk = 0;
}

// Limit File Types
// Allow only certain file types to be uploaded
// CODE:
// if ($fileType != "txt" && **MORE CONDITIONS**) { $uploadOk = 0; }

// Check if uploadOk is set to 0 by any error
if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
} else {
	// If everything is okay, try to upload the file
	if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
		echo "The file " . basename($_FILES["userfile"]["name"]) . " has been uploaded.";
		$file_path = validate_plain_text($target_file);
		$file_name = validate_plain_text($target_file_name);
		$query = "INSERT INTO ";
		$query .= "upload(file_name, file_path) ";
		$query .= "VALUES ('$file_name', '$file_path'); ";
		$result = mysqli_query($connection, $query);

		echo "<a href=\"index.php\">Upload Another File</a>";
		echo "<br />";

		// Register the uploaded file's path in MySQL
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
}

?>