<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Charmonman|Mali" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Admin Login</title>
    
    <style>
    
        body{
            background: url("images/plumber.jpg");
            background-size: cover;
            text-align: center;
        }
    
    
    </style>
    
</head>
<body>
    <div class="admin-login container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h2 style="font-family: sans-serif">Admin Login</h2>
                
                <form action="page_admin.php" method="post">
                    <div class="form-group">
                       <label for="username">Username:</label>
                        <input name="username" type="text">
                    </div>
                     <div class="form-group">
                       <label for="password">Password:</label>
                        <input name="password" type="password">
                    </div>
                     <div style="text-align: center" class="form-group">
                        <input class="btn btn-info" type="submit" name="submit" value="Enter">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>