<?php
require_once("includes/db_connection.php");
require_once("includes/functions.php");

if(isset($_GET["t"]) && isset($_GET["id"])) {
	$token = $_GET["t"];
	$post = $_GET["id"];
	if($token == "u") {
		// Do upvote
		$upval = get_upvote_from_id($post);
		$upval += 1;
		$query = "UPDATE poll ";
		$query .= "SET up_vote='$upval' ";
		$query .= "WHERE id='$post'";
		$res = mysqli_query($connection, $query);
		header("Location: poll.php");
	} else if($token == "d") {
		// Dp Downvote
		$dval = get_downvote_from_id($post);
		$dval += 1;
		$query = "UPDATE poll ";
		$query .= "SET down_vote='$dval' ";
		$query .= "WHERE id='$post'";
		$res = mysqli_query($connection, $query);
		header("Location: poll.php");
	}

}
         
if (!isset($_POST["addque"]))
	;
else {
	$input_question = validate_plain_text($_POST["question"]);
	$query = "INSERT INTO ";
	$query .= "poll(question) ";
	$query .= "VALUES ('$input_question'); ";
	$result = mysqli_query($connection, $query);
	header("Location: poll.php");
}

$questions = fetch_all_questions();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Polls</title>
</head>
<body><center>
<form action="poll.php" method="post">
<h2>Ask a <font color="blue">Question</font></h2>
	
		
			<input type="text" name="question" placeholder="Type your question">
	<br><br>
		<input name="addque" type="submit" class="box" id="upload" value="Add Question">
		
</form>

<br />
<p><h2><font color="blue">Answer</font> previously asked questions</h2></p>
<?php while($question = $questions->fetch_assoc()) { ?>
	<br />
	<?php echo $question["question"]; ?>
	<?php echo "\t"; ?>
	<?php echo "<a href=\"poll.php?t=u&id="; ?>
	<?php echo $question["id"]; ?>
	<?php echo "\">UpVote:</a> "; ?>
	<?php echo $question["up_vote"]; ?>
	<?php echo "\t"; ?>
	<?php echo "<a href=\"poll.php?t=d&id="; ?>
	<?php echo $question["id"]; ?>
	<?php echo "\">DownVote:</a> "; ?>
	<?php echo $question["down_vote"]; ?>
	<form post="" action="">
	<input type="text" placeholder="Answer the question">
	<input type="submit" value="Anwer" name="answer">
	</form>
<?php } ?>
</center>
</body>
</html>