<?php
	require_once("db_sport.php");

	if (isset($_POST["title"]) &&
		isset($_POST["id"]) &&
		isset($_POST["author"]) &&
		isset($_POST["date"]) &&
		isset($_POST["main-article"]) &&
		isset($_POST["additional-information"])) {

		$sarticle = array('title' => $_POST["title"],
						'id' => $_POST["id"],
						'author' => $_POST["author"],
						'date' => $_POST["date"],
						'main-article' => $_POST["main-article"],
						'additional-information' => $_POST["additional-information"]);

		array_push ($ssection, $sarticle);

		$csv_string = implode(",,", $sarticle);
		$file = fopen("database-sport.csv", "a");
		fwrite($file, "\n".$csv_string);
		fclose($file);

		header("Location: admin.php");
	}
?>