<?php
session_start();
require_once "database.php";
if (isset($_GET['task_id'])) {
    $id = ($_GET['task_id']);
    $delete_query = "DELETE FROM tasks WHERE task_id=$id";
    $delete_query;
    // $run_query = connect()->query($delete_query);

    header('location: index.php');
} else {
    header('location: index.php');
}
