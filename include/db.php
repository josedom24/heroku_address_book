<?php
	$con = mysql_connect("eu-cdbr-west-02.cleardb.net","b3526bc9bdd43d","4e3bc5bd");
	if($con==NULL){
		echo "Error establishing database connection.";
	}
	else{
		mysql_select_db("heroku_b81fa0a6776fe38");
	}
?>