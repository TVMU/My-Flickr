<?php
include "../Data/UserDb.php";
session_start();
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];

}
$test=new UserDb();
$user=$test->getUserByUN("$username");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/Gallery.css" rel="stylesheet">
    <link href="css/tabbar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/ca-pub-3311815518700050.js"></script>

    <![endif]-->

</head>

<body>


<!-- Navigation -->

<header id="top" class="header" style="background-image: url(img/bg.jpg)">


    <div>
        <table>

            <tr>
                <td >
                    <?php
                    echo '<img src="data:image/jpeg;base64,'.base64_encode($user->getAvatar()) .'" class="img-circle" alt="Cinque Terre" width="90" height="90" style="margin-top: 100px; margin-left: 100px"/>';
                    ?>
                </td>
                <td>
                    <label style="color:white;font-size: x-large;margin-top: 120px;margin-left: 10px; "><?php echo $user->getFristName() ." ". $user->getLastname()?></label>
                </td>
                <td>

                </td>

            </tr>
        </table>
    </div>
    <link href="css/bootstrap-tagsinput.css" rel="stylesheet">

</header>

<!-- Page Content -->
<div class="container">
    <div clas="row">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-0 col-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Photostream</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Album</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Favorites</a></li>
                            <li role="presentation" style="float: right"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">More</a></li>
                        </ul>
                        <hr>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h3>Photostream</h3>
                                <?php require"Photostream.php" ?>
                                <?php
                                    $user
                                ?>
                                <div class="row">




                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h3>Album</h3>
                                <?php require "Album.php"?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h3>Section 3</h3>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <h3>Section 4</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</body>

</html>
