<?php
	
	switch($_REQUEST['action']){
		case 'create':
			$title = $_POST["title"];
			$description = $_POST["description"];
			$date = date("m/d/y");

			$sql = "INSERT INTO notes (id, title, description, created_date) VALUES ('', '{$title}', '{$description}', '{$date}')";

			$res = $conn->query($sql);
			break;
	}



