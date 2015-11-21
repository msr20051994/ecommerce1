<!DOCTYPE html>

<?php
include("functions/functions.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="Content/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="Content/simple-sidebar.css" rel="stylesheet"/>
    <link href="Content/bootstrap.min sidebar.css" rel="stylesheet"/>

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
                <a class="navbar-brand" href="#">Brand</a><!--used for homepage-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li><!--Links created-->
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Dropdown <span class="caret"></span>
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
                                    Start Bootstrap
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
                        <?php
						if(isset($_GET['pro_id'])){
						  $product_id = $_GET['pro_id'];
						  $get_pro = "select * from product where product_id='$product_id'";
	                      $run_pro = mysqli_query($con,$get_pro);
	
                       	  while($row_pro = mysqli_fetch_array($run_pro)){
	                           $pro_id  = $row_pro['product_id'];
	                           $pro_title  = $row_pro['product_title'];
	                           $pro_price  = $row_pro['product_price'];
	                           $pro_image = $row_pro['product_image'];
							   $pro_desc = $row_pro['product_desc'];
	
	echo "
	      <div id='single_product'>
		    <h3>$pro_title</h3>
			<img src='admin_area/product_images/$pro_image' width='400' height='300'/>
			
			<p><b>$pro_price</b></p>
			<p>$pro_desc</p>
			
			<a href='index1.php' <button style='float:left'>Go Back</button></a>
			<a href='index1.php?pro_id=$pro_id'> <button style='float:right'>Add To Cart</button></a>
		  </div>
	";
	
}
}
?>
                            <h2 class="text-right"></h2>
                            <button class="btn btn-primary btn-lg ">Add to Cart</button>
                            <button class="btn btn-primary btn-lg ">Buy Now</button>

                            <hr>
                           
                            <div class="well">

                                <div class="text-right">
                                    <a class="btn btn-success">Leave a Review</a>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">10 days ago</span>
                                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">12 days ago</span>
                                        <p>I've alredy ordered another one!</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">15 days ago</span>
                                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
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
