﻿<!DOCTYPE html>

<?php
include("functions/functions.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="Content/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="Content/simple-sidebar.css" rel="stylesheet" />
    <link href="Content/bootstrap.min sidebar.css" rel="stylesheet" />

</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!--configuring the hamburger-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CloKart</a><!--used for homepage-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Link</a></li>Links created-->
                    <!--<li><a href="#">Link</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class></span>
                            <ul class="dropdown-menu">
                                <li><a class="navbar-link" href="https://www.google.co.in/">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li><!--creating space between the links-->
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Photo</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Name<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Cart</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Shop By
                        </a>
                    </li>
                    <li>
                        <a href="#">CATEGORIES</a>
                        <ul id="cats">
                            <?php getCats();?>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BRANDS</a>
                        <ul id="brands">
                            <?php getBrands();?>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

        <div class="col-md-offset-2">
            <div class="thumbnail">
                <div class = "row">
                    <div class="col-xs-3">
					
                       <?php getPro();?>
					   <?php getCatPro();?>
					   <?php getBrandPro();?>
					 </div>
					</div>
				</div>
                        
                    <hr>
                    <h2 class="text-right"></h2>
                    
					
                    <hr>

                    

                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/bootstrap.min sidebar.js"></script>
    <script src="Scripts/jquery sidebar.js"></script>
</body>
</html>
