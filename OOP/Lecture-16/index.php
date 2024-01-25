<?php
  include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $userObj = new UserView();
      $usersObj->showUser("Daniel");

      $userObj2 = new UserView();
      $usersObj2-> createUser("Mamun","Salauddin","1997-01-17");

      //   $userObj->getUsers();
      //$testObj->getUserStmt("Daniel","Nielsen");
    ?>
</body>
</html>