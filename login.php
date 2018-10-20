<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration And Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <div class = "login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login From</h2>
                    <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="formn-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary"> Login </button>
                    </form>                
                </div>
                <div class="col-md-6 login-right">
                    <h2> Register Here</h2>
                    <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="formn-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary"> Register </button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
    


    <script src="main.js"></script>
</body>
</html>