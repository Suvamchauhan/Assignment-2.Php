<?php
include 'db.php';
function valueOfUsername(){
    global $db;
    if(isset($_GET['userId'])){
        $id = $_GET['userId'];
        $sql = 'select username from users where userId = '.$id;
        $query = mysqli_query($db,$sql);
        $user = mysqli_fetch_assoc($query);
        echo "value='".$user['username']."'";
    }
}
function valueOfPassword(){
    global $db;
    if(isset($_GET['userId'])){
        $id = $_GET['userId'];
        $sql = 'select password from users where userId = '.$id;
        $query = mysqli_query($db,$sql);
        $user = mysqli_fetch_assoc($query);
        echo "value='".$user['password']."'";
    }
}
function valueOfUserId(){
    global $db;
    if(isset($_GET['userId'])){
        $id = $_GET['userId'];
        echo $id;
    }
}
function valueofSubmit(){
    global $db;
    if(isset($_GET['userId'])){
        echo "name= 'editUser' value = 'Edit User'";
    }
    else{
        echo "name = 'addUser'  value = 'Add User'";
    }
}
