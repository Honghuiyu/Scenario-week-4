<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Scenario Week</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

</head>
<body>
<nav>
    <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="mysnippets.php">My Snippets</a></li>
            <li><a href="newsnippet.php">New Snippets</a></li>
            <li><a href="upload.html">Upload</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><span><?php echo $_SESSION['name'];  ?>  </span></li> 
            <li><a href="editprofile.php">Profile</a></li>
            <li><a href="../index.html">Sign out</a></li>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <img style="height: 5%; width: 5%" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-check-icon.png"/>
                    <span class="card-title">Allen</span>
                    <p>Archie is cool.</p>
                </div>
                <div class="card-action">
                    <a href="allsnippets.html">All snippets</a>
                    <a href="#">Homepage</a>
                </div>
            </div>

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <img style="height: 5%; width: 5%" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-check-icon.png"/>
                    <span class="card-title">Harry</span>
                    <p>Ken is cooler.</p>
                </div>
                <div class="card-action">
                    <a href="allsnippets.html">All snippets</a>
                    <a href="#">Homepage</a>
                </div>
            </div>

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <img style="height: 5%; width: 5%" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-check-icon.png"/>
                    <span class="card-title">Archie</span>
                    <p>Harry is coolest.</p>
                </div>
                <div class="card-action">
                    <a href="allsnippets.html">All snippets</a>
                    <a href="#">Homepage</a>
                </div>
            </div>

            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <img style="height: 5%; width: 5%" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/sign-check-icon.png"/>
                    <span class="card-title">Ken</span>
                    <p>I agree with Archie.</p>
                </div>
                <div class="card-action">
                    <a href="allsnippets.html">All snippets</a>
                    <a href="#">Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>