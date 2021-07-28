<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pendaftaran';
$conn = new mysqli($server, $username, $password, $dbname);

function x($string)
{
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}