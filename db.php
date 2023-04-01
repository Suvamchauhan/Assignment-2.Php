<?php
session_start();
const USERNAME = 'root';
const PASSWORD = '';
const HOSTNAME = 'localhost';
const DATABASE = 'assignment_2';

$db = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$db){
    die;
}
