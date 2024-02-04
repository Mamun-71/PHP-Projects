<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container"> 
    <form action="login.php" method="post">

        <div class="form-group">
        <label for="User Name">User Name</label>
        <input type="text" class="form-control" name="user_name" placeholder="User Name">
        </div>

        <div class="form-group">
        <label for="Email">Email address</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group">
        <label for="Repeat Password">Repeat Password</label>
        <input type="repatpassword" class="form-control" name="repatpassword" placeholder="Repeat Password">
        </div>

        <br>
        <button type="submit" class="btn btn-primary" name="signup-submit">Submit</button>

    </form>

</div>

</body>
</html>