<html>
    <head>
        <meta charset="UTF-8">
        <title> Document </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: pink;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="login.php" method="post">
    <h1> Welcome to our Page! </h1>
    <h2> Please fill the form. </h2>
            <div class="mb-3">
                <label for=""> Fullname:
                    <input type="text" class="form-control" name="fullname">
                </label>
            </div>
            <div class="mb-3">
                <label for=""> Username:
                    <input type="text" class="form-control" name="uname">
                </label>
            </div>
            <div class="mb-3">
                <label for=""> Password:
                    <input type="password" class="form-control" name="pass1">
                </label>
            </div>
            <div class="mb-3">
                <label for=""> Confirm Password:
                    <input type="password" id="fullname" class="form-control" name="pass2">
                </label>
            </div>
            <div class="mb-3">
                <label for = "">
                    <input type="submit" class="btn btn-success">
                </label>
            <div class="mb-3">
                <br><a href="registration.php"> Create Account</a>
            </div>
    </form>
</div>
</body>
    <script src="js/bootstrap.js"></script>
</html>