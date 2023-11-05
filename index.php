<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </li>
                <li>
                    <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Registration</h1>

                <form class="form-horizontal" action="signupprocess.php" method="POST">

                <div class="form-group">
                        <label class="control-label col-sm-2">First: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="usersFirst" id="email" placeholder="Enter your first name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Last: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="usersLast" id="email" placeholder="Enter your last name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="usersEmail" id="email" placeholder="Enter email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>