<?php
session_start();
require_once "db.php";
if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    $delete_query = "DELETE FROM task_table WHERE id=$id";
    $delete_query;
    $run_query = $dbcon->query($delete_query);

    header('location: index.php');
} else {
    header('location: index.php');
}
