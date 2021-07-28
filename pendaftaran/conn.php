<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();

$server = 'localhost';
$usrnm = 'root';
$password = '';
$dbname = 'pendaftaran';
$conn = new mysqli($server, $usrnm, $password, $dbname);

function x($string)
{
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}