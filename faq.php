<!DOCTYPE html>
<html lang="en">

<head>
    <title>:::iMARKET:::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/design.css" />

</head>

<body>

    <?php
        session_start();
        require_once('connector.php');
    ?>


        <nav id="navbar-main">
          <!--Login System Embedded by Jung Start-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
                </div>
                <div class="collapse navbar-collapse row" id="myNavbar">
                    <ul class="pull-right">
                        <?php if(isset($_SESSION['email'])&& $_SESSION['userType'] == 'employee'){ ?>
                        <li class="upper-links"><a class="links" href="productAdd.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> SELL</a></li>
                        <li class="upper-links"><a class="links" href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> NOTIFICATIONS</a></li>
                        <li class="upper-links"><a class="links" href="index_wishlist.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> WISHLIST</a></li>
                        <li class="upper-links"><a class="links" href="index_shopcart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> CART</a></li>

                        <li class="upper-links dropdown"><a class="links">My Account</a>
                            <ul class="dropdown-menu">
                                <li class="profile-li"><a class="profile-links" href="#">My Order</a></li>
                                <li class="profile-li"><a class="profile-links" href="accountSetting.php">Account Setting</a></li>
                                <li class="profile-li"><a class="profile-links" href="#">Change Password </a></li>
                                <li class="profile-li"><a class="profile-links" href="logout.php">logout</a></li>

                                <?php }elseif(isset($_SESSION['email'])&& $_SESSION['userType'] == 'student'){ ?>
                                <li class="upper-links"><a class="links" href="productAdd.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> SELL</a></li>
                                <li class="upper-links"><a class="links" href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> NOTIFICATIONS</a></li>
                                <li class="upper-links"><a class="links" href="index_wishlist.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> WISHLIST</a></li>
                                <li class="upper-links"><a class="links" href="index_shopcart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> CART</a></li>

                                <li class="upper-links dropdown"><a class="links">My Account</a>
                                    <ul class="dropdown-menu">
                                        <li class="profile-li"><a class="profile-links" href="#">My Order</a></li>
                                        <li class="profile-li"><a class="profile-links" href="accountSetting.php">Account Setting</a></li>
                                        <li class="profile-li"><a class="profile-links" href="#">Change Password </a></li>
                                        <li class="profile-li"><a class="profile-links" href="logout.php">logout</a></li>

                                        <?php }elseif(isset($_SESSION['email'])&& $_SESSION['userType'] == 'admin'){ ?>
                                        <li class="upper-links"><a class="links" href="productAdd.php"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> SELL</a></li>
                                        <li class="upper-links"><a class="links" href="#"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> NOTIFICATIONS</a></li>
                                        <li class="upper-links"><a class="links" href="index_wishlist.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> WISHLIST</a></li>
                                        <li class="upper-links"><a class="links" href="index_shopcart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> CART</a></li>

                                        <li class="upper-links dropdown"><a class="links">My Account</a>
                                            <ul class="dropdown-menu">
                                                <li class="profile-li"><a class="profile-links" href="adminPart/adminDashboard.php">Admin Dashboard</a></li>
                                                <li class="profile-li"><a class="profile-links" href="accountSetting.php">Account Setting</a></li>
                                                <li class="profile-li"><a class="profile-links" href="#">Change Password </a></li>
                                                <li class="profile-li"><a class="profile-links" href="logout.php">logout</a></li>


                                <?php }else { ?>
                                <li class="upper-links dropdown"><a class="links">My Account</a>
                                    <ul class="dropdown-menu">
                                        <li class="profile-li"><a class="profile-links" href="login.php">LOGIN</a></li>
                                        <li class="profile-li"><a class="profile-links" href="signUp.php">REGISTER</a></li>
                                        <?php } ?>


                                    </ul>
                                </li>
                            </ul></ul></ul>
                    </ul>
                </div>
            </div>
            <!--Login System Embedded by Jung End-->



            <div class="row">
                <!--Size-->
                <div class="col-sm-1">
                </div>
                <!--Size-->
                <div class="col-sm-1">
                    <a href="index.php"><img src="image/logo.png" width="70px" height="70px"></a>
                </div>
                <div class="smallsearch col-sm-8 col-xs-11">
                    <div class="row">
                      <form action="index_result.php" method="POST" role="search">
                        <input class="navbar-input col-xs-11" type="text" name="search" placeholder="Search for Products, Brands and more" name="">
                        <button class="navbar-button col-xs-1" type="submit">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                  </form>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mySecondbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
                </div>
                <!--Size-->
                <div class="col-sm-2">
                    <div class="col-sm-8 col-xs-11">
                    </div>
                </div>
                <!--Size-->
                <div class="collapse navbar-collapse row" id="mySecondbar">
                    <ul class="nav navbar-nav fontnav">
                        <li><a href="productlocation/productview_latest.php">LATEST</a></li>
                        <li><a href="productlocation/productview_men.php">MEN</a></li>
                        <li><a href="productlocation/productview_women.php">WOMEN</a></li>
                        <li><a href="#">iACADEMY MERCHANDISE</a></li>
                        <li><a href="#">CUSTOMIZE</a></li>
                    </ul>
                    </li>
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>
      <div class="container">
          <h1>Frequently Asked Questions</h1>
          <!--1-->

              <h4>DELIVERY</h4>

              <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">

                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">When/How will I receive my product?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    You will receive your order depending on what you and your seller set the meet up day and time.
                  </div>
                            </div>
                            </div>
                            <!--2-->

              <h4>RETURN</h4>


              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">

              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How will I return a defective product?</a>
              </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                1. You have to contact you seller and state the defects of the product.<br>
                2. You have to talk to the seller when can you have the meet up.
              </div>
              </div>
              </div>

              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">

              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">When will receive my replacement?</a>
              </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                You will receive your product replacement on the day you and your seller has agreed upon.
              </div>
              </div>
              </div>

                <!--3-->
              <h4>ORDER AND PAYMENT</h4>


              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">

              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How to Buy?</a>
              </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                1. Go to desired section and find a item that interests you.<br>
                2. You can click buy or Click the product for product details.<br>
                3. After clicking buy you will then be asked to contact the seller for your meet up details.<br>
              </div>
              </div>
              </div>

              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">

              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How to Sell?</a>
              </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
              Go to sell a product.
              </div>
              </div>
              </div>
<!--4-->

              <h4>PRODUCT</h4>


              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">

              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">How many days is the warranty of the product?</a>
              </h4>
              </div>
              <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                The warranty will depend on what you and your seller has agreed on.
              </div>
              </div>
              </div>
<!--5-->

              <h4>ACCOUNT</h4>


              <div class="panel panel-default">
              <div class="panel-heading">
              <h4 class="panel-title">

              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">How do create an account?</a>
              </h4>
              </div>
              <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body">
                1. Click the my account button on the upper right corner of the website and click register.<br>
                2. You need to enter firstname, lastname, email, password, contact number and date of birth.<br>
                3. You need to select a few school details Student or Employee:<br>
                4. for student select your year level, starnd and course<br>
                5. or for employee select your department<br>
              </div>
              </div>
              </div>
      </div>
      </div>
        <!--First-->
    <?php include 'footer.php';?>

</body>

</html>
