<?php
// Adding User
include 'db.php';
if (isset($_POST['addUser'])) {
    $username = $_POST['username'];
//    die($username);
    $password = $_POST['password'];
    $password_hash = md5($password);
//    echo $username;
    $sql = "insert into users (username,password,password_hash) values ('$username','$password','$password_hash')";
//die( $sql);
    $query = mysqli_query($db, $sql);
    $message = "User Added Successfully";
    $_SESSION['message']= $message;
    header('location:users.php');
}

if (isset($_POST['editUser'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);
    $id = $_POST['userId'];
//    echo $username;
$sql="update users set username='$username', password = '$password', password_hash='$password_hash' where userId=".$id;
echo $sql;
    $query = mysqli_query($db,$sql);
    $message = "User Updated Successfully";
    $_SESSION['message']= $message;
    header('location:users.php');
}
if(isset($_GET['deleteUser'])){
    $sql = "delete from users where userId=".$_GET['deleteUser'];
    $query = mysqli_query($db,$sql);
    $message = "User Deleted";
    $_SESSION['message']=$message;
    header('location:users.php');
}
// Updating User