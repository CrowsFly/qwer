<?php
	header('content-type:text/html;charset=utf8');
	for ($i=0; $i <=10 ; $i++) { 
		echo $i;
		echo '<br>';
	}

	echo '<br>';

	$q = "hello word";
	echo strlen($q);

	echo '<br>';

	$q = "Have you ever gone shopping and";
	echo $q;

	echo '<br>';


?>