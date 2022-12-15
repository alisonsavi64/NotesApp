<?php declare(strict_types=1);

function notesCard(string $title, string $description, string $date) : void{

	$card = '


		<div class="card" style="width: 18rem;>
  			<div class="card-body">
			    <h5 class="card-title">'. $title .'</h5>
			    <h6 class="card-subtitle mb-2 text-muted"> '. $date . '</h6>
			    <p class="card-text">' . $description . '</p>
  			</div>
		</div>


	'; 

	echo "$card";


}

function forms() {

	$form = '
	<h1>New Note</h1>
	<form action="crud.php" method="POST">
    	<input type="hidden" name="action" value="create">
    	<div class="mb-3">
			<input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Title">
		</div>

		<div class="mb-3">
			<input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description">
		</div>
		<button type="submit">Submit</button>

    </form>
    ';

    echo $form;

}

?>