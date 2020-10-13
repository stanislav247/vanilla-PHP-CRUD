<?php
session_start();
include "database.php";


// Add Action

if(isset($_POST['add'])){

	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	$photo=$_FILES['image']['name'];
	$upload = "uploads/".$photo;

	$query = "INSERT INTO users(first,last,email,phone,photo)VALUES(?,?,?,?,?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param("sssss",$first,$last,$email,$phone,$upload);
	$stmt->execute();

	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
	header('location:index.php');

	$_SESSION['response'] = "The user is added successfully !";
	$_SESSION['res_class'] = "green darken-1";
}

// Delete Action

if(isset($_GET['delete'])){
	$id = $_GET['delete'];

// 1.) Delete Photo from directory
    
    $sql="SELECT photo FROM users WHERE id=?";
    $stmt2 = $db->prepare($sql);
    $stmt2->bind_param("i" , $id);
    $stmt2->execute();
    $result = $stmt2->get_result();
    $row = $result->fetch_assoc();

    $imagepath = $row['photo'];
    unlink($imagepath);


// 2.)  Delete Record

	$query = "DELETE FROM users WHERE id=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("i" , $id);
	$stmt->execute();

	header('location:index.php');

	$_SESSION['response'] = "The user is deleted successfully !";
	$_SESSION['res_class'] = "red accent-4";
}


// Edit Action 

if(isset($_GET['edit'])){
	$id=$_GET['edit'];

	$query = "SELECT * FROM users WHERE id=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("i" , $id);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$id = $row['id'];
	$first = $row['first'];
	$last = $row['last'];
	$email = $row['email'];
	$phone = $row['phone'];
	$photo = $row['photo'];   
}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$oldimage=$_POST['oldimage'];

	
	if(isset($_FILES['image']['name']) && ($_FILES['image']['name']!="")){
		$newimage=$_FILES['image']['name'];
		unlink($oldimage);
		move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
	}
	else{
		$newimage = $oldimage;
	}

	$query = "UPDATE users SET first=?,last=?,email=?,phone=?, photo=? WHERE id=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("sssssi",$first,$last,$email,$phone,$newimage,$id);
	$stmt->execute();

	$_SESSION['response'] = "The user is updated successfully !";
	$_SESSION['res_class'] = "indigo accent-3";
	header('location:index.php');

}

// Details Action ; d(details)

if(isset($_GET['details'])){
	$id=$_GET['details'];
	$query="SELECT * FROM users WHERE id=?";
	$stmt = $db->prepare($query);
	$stmt->bind_param("i" , $id);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	$did= $row['id'];
	$dfirst= $row['first'];
	$dlast= $row['last'];
	$demail= $row['email'];
	$dphone= $row['phone'];
	$dphoto= $row['photo'];
}


?>

