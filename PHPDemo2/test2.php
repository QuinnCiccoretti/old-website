<?php 
	//instantiate our db
	$host="host=ec2-174-129-223-35.compute-1.amazonaws.com";
	$dbname="dbname=da681a2ij30ae9";
	$user="user=wsriqgpezbffma";
	$port="port=5432";
	$password="password=CDwlj8yVgkD7K6ymi2S0arVWwV";
	$db=pg_connect($host." ".$dbname." ".$user." ".$port." ".$password);
	//create a table
	$query = <<<CREATE
	CREATE TABLE Football(
			TeamName varchar(255),
			NumberOfWins int
		)
CREATE;
	$ret = pg_query($query);
	if(!$ret)
	{
		echo(pg_last_error($db));
	}
	else{
		echo "Surprise! You did it right";
	}

	//add some data

	//qiery our table

 ?>