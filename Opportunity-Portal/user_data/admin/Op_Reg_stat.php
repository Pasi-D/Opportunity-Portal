<?php 
	require 'Cloudinary.php';
	require 'Uploader.php';
	require 'Api.php';

	\Cloudinary::config(array(
    "cloud_name" => "dmcxtajr1",
    "api_key" => "844387894658348",
    "api_secret" => "mIXUIyAY4Ot7vSyX6QqS1AmtmVA"
	));

	include_once '../DB/connector.php';

	$cloudUpload = \Cloudinary\Uploader::upload($_FILES["inputImage"]['tmp_name']);

	$Opponame = $_POST['opponame'];
	$oppdesc = $_POST['oppodesc'];
	$url = $cloudUpload[secure_url];
	
	//Upload images to a cloud storage get the image url and add it to the database.

	$sql = "INSERT INTO opportunity (opportunity_name,opportunity_description,img_url) VALUES ('$Opponame','$oppdesc','$url')";
	mysql_query($sql) or die("Query failed".mysql_error());

    //echo "Opportunity Registered Successfully";
    header("refresh:3; url=./Admin_Panel.php");/*On success redirects to the admin panel after 3 seconds*/
 ?>