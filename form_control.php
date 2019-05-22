<?php

	$business_type=$_POST["business-name"];
	$sub_business_type=$_POST["sub-business-type"];
	$department=$_POST["department"];
	$job_name=$_POST["job-type"];
	$text=$_POST["text"];
	$location=$_POST["location"];
	$country=$_POST['shift'];
	$vacancies=$_POST["vacancies"];
	$expectdate=$_POST["join"];
	$lastdate=$_POST["last"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="Job_Details";
	
	$conn=mysqli_connect('localhost','root','');
	$query=mysqli_query($conn,'create database dbname1');
	mysqli_query($conn,'use dbname1');
	
	$qu=mysqli_query($conn,'CREATE TABLE details( 
        Business_type VARCHAR(30) ,
		Sub_business_type VARCHAR(30) ,
		Department VARCHAR(30),
		Job_name VARCHAR(30),
        Text VARCHAR(30),
        Location VARCHAR(50),
		Country VARCHAR(50),
		Vacancies VARCHAR(30),
		Expectdate date,
		Lastdate date		
        )');
		
	mysqli_query($conn,"INSERT INTO details (Business_type,Sub_business_type,Department,Job_name,Text,Location,Country,Vacancies,Expectdate,Lastdate) VALUES ('$business_type','$sub_business_type','$department','$job_name','$text','$location','$country','$vacancies','$expectdate','$lastdate')");
	header("Location:screen.html");
	exit;
	
?>