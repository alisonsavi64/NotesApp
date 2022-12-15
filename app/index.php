<?php

	require("./components.php");

?>

<!DOCTYPE HTML>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>LearningPHP</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

	<?php  

		include("config.php");

	?>
	<nav class="navbar bg-black">
    	<div class="container-fluid">
    		<span class="navbar-brand mb-0 h1 text-white">Your Notes</span>
    	</div>
    </nav>

   	<?php 

   		forms();

   	?>

    <?php notesCard(title: "legal", description: "muiassssssssssssssssasfasgasgasgasgags", date: date("m/d/y")); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>


</html>