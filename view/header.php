<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootsrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link type="type/css" rel='stylesheet' href="css/css.css">
   
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">my blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="register.php">Register <span class="sr-only">(current)</span></a></li>
                    <!--a link to register to my website-->
                    <li><a href="http://localhost:8383/Portfolio3JosephR/index.html">portfolio</a></li>
                    <!--a link to my jquery portfolio -->
                    <li class="dropdown">
                        <a href="controller/logout-user.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">logout <span class="caret"></span></a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <!--a search button for future use -->
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="post.php">post comment</a></li>
                    <!-- a link to post a comment-->
                    <li class="dropdown">
                        <a href="login.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">login <span class="caret"></span></a>
                        <!--nav bar link for login-->
                </ul>
                </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
</head>
<body>

