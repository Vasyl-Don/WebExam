<?php
	$connect = mysqli_connect('localhost', 'root', '', 'storage');
	if(!$connect){
		die('Error connecting to DB');
	}
