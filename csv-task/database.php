<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DBNAME = 'csv_task';

$conn = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

if ($conn->connect_error) {
    die("connect error: " . $conn->connect_error);
}