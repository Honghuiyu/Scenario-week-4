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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

</head>

<body>
<nav>
    <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
            <li><a href="home.php">Home</a></li>
            <li><a href="#">My Snippets</a></li>
            <li><a href="newsnippet.php">New Snippets</a></li>
            <li><a href="upload.html">Upload</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="editprofile.php">Profile</a></li>
            <li><a href="../index.html">Sign out</a></li>
        </ul>
    </div>
</nav>


<div class="container">
    <h4>My Snippets:</h4>
    <!-- 开始传入数据 -->
    <?php 
    $connect=mysqli_connect("localhost","root","123456fxf");
    mysqli_select_db($connect,"Scenario4") or die('数据库连接错误，错误信息：'.mysqli_error()); 

    session_start();
    $name=$_SESSION['name'];
    $query="SELECT snippets FROM Snippets WHERE Username='$name' ";
    $db = new PDO("mysql:dbname=Scenario4", "root", "123456fxf");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rows = $db->query($query);
    foreach ($rows as $row) {
        ?>
    

    <div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <p>
                        <?= $row["snippets"] ?>
                    </p>
                </div>
                <div class="card-action">
                    <a href="#">delete</a>
                </div>
            </div>



        </div>
    </div>
    <?php
}
    ?>
</div>

</body>
</html>