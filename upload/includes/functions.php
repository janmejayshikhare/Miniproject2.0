<?php
	function confirm_query($result_set) {
		if(!$result_set) {
			die("Database query failed.");
		}
	}

	function fetch_all_files() {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM upload ";
		$query .= "ORDER BY file_name ASC";
		$files = mysqli_query($connection, $query);
		confirm_query($files);
		return $files;
	}

	function fetch_all_questions() {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM poll ";
		$query .= "ORDER BY id ASC";
		$questions = mysqli_query($connection, $query);
		confirm_query($questions);
		return $questions;
	}

	function get_upvote_from_id($post_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM poll ";
		$query .= "WHERE `id` = '$post_id'";
		$question = mysqli_query($connection, $query);
		confirm_query($query);
		$one = $question->fetch_assoc();
		return $one["up_vote"];
	}

	function get_downvote_from_id($post_id) {
		global $connection;
		$query = "SELECT * ";
		$query .= "FROM poll ";
		$query .= "WHERE `id` = '$post_id'";
		$question = mysqli_query($connection, $query);
		confirm_query($query);
		$one = $question->fetch_assoc();
		return $one["down_vote"];
	}

	function validate_plain_text($data) {
		global $connection;
		$data = trim($data);
		$data = stripslashes($data);
		$data = strip_tags($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($connection, $data);
		return $data;
	}
?>