<?php
	$servername = "localhost";
	$username =  "root";
	$password = "";
	$dbName = "computerarchitecture";
	
	//Make Connection
	$conn = new mysqli($servername, $username, $password, $dbName);
	//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "SELECT Date, ID, Score, TasksDone, TasksDoneRight, TaskType, Time, TrainingType, UserName FROM highscore";
	$result = mysqli_query($conn ,$sql);
	
	
	if(mysqli_num_rows($result) > 0){
		//show data for each row
		while($row = mysqli_fetch_assoc($result)){
			echo "Date: ".$row['Date'] . " ID: ".$row['ID']. " Score: ".$row['Score']. " TasksDone: ".$row['TasksDone'] . " TasksDoneRight: ".$row['TasksDoneRight'] . " TaskType: ".$row['TaskType'] . " Time: ".$row['Time'] . " TrainingType: ".$row['TrainingType'] . " UserName: ".$row['UserName'] ."<br>";
		}
	}
	
	
	
	


?>