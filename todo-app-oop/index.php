<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APP</title>

    <link rel="stylesheet" href="./bootstrap.min.css">

    <style>
        body {
            padding: 0;
            margin: 0;
            background: url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;

        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-8">
                <h2 class="display-4 text-center">My To Do List</h2>
            </div>

            <div class="col-8 m-auto">
                <form class="mt-4" action="create.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <input class="form-control form-control-lg" type="text" name="textfield" placeholder="Enter your task">
                        </div>

                        <div class="col-12">
                            <input class="btn btn-success w-100" type="submit" name="addtask" value="Add Task">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!-- Table -->

    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">

                <table class="table table-sm table-center mx-auto mt-3">
                    <thead class="bg-dark text-white text-center">
                        <tr>
                            <th>Serial</th>
                            <th>Task</th>
                            <th>Added Date</th>
                            <th>Added Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php
                    require_once "db.php";
                    $task_show_query =  "SELECT * FROM task_table";
                    $result = $dbcon->query($task_show_query);


                    if ($result->num_rows != 0) {

                        $serial = 0;

                        foreach ($result as $row) {


                            $task = $row['task_name'];
                            $temp_date_time = (explode(' ', $row['added_time']));
                            $date = $temp_date_time[0];
                            $time = $temp_date_time[1];
                            $serial++;

                    ?>

                            <tr>
                                <td> <?php echo $serial ?> </td>
                                <td> <?php echo $task ?> </td>
                                <td> <?php echo $date ?> </td>
                                <td> <?php echo $time ?> </td>

                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-warning" href="update.php?id=<?php echo ($row['id']); ?>">Update</a>
                                        <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo ($row['id']); ?>">Delete</a>
                                    </div>
                                </td>

                            </tr>

                        <?php


                        }
                    } else {
                        ?>

                        <tr>
                            <td colspan="20" class="text-center display-4">No task</td>
                        </tr>

                    <?php
                    }
                    ?>

                </table>

            </div>
        </div>
    </div>


</body>

</html>