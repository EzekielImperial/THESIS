<?php

session_start();
require_once('connector.php');

if(!$_SESSION['email']){
 header("need to be login", 404);
          exit;}
?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Sell your Item</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/login.css" />
        <link rel="stylesheet" href="css/design.css" />
        <link rel="stylesheet" href="css/productsPages.css" />
        <script src="jsmain/jsmain.js"></script>

    </head>

    <body>

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

      <!-- Main code starts -->

        <div class="container-fuild">
            <div class="row">
                <div class="col-md-12 col-centered formProduct1">
                    <div class="row">
                        <h2> Sell an Item </h2>
                        <!-- just testing will going to recode -->
                        <hr>
                    </div>
                    <div class="row">
                        <form class="form" action="productTODb.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputname">What are you selling?</label>
                                <input type="text" class="form-control" placeholder="Enter product name/title" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="sel1">Whats your Product Category:</label>
                                <select class="form-control" name="category" id="category" onChange="onSelectChange()" required>
                                   <option value="" selected disabled>Choose One</option>
                                   <option value="Mobile Phones Accessories">Mobile Phones Accessories</option>
                                   <option value="Clothing and Accessories">Clothing and Accessories</option>
                                   <option value="Bags and Accessories">Bags and Accessories</option>
                                   <option value="Services">Services</option>
                                   <option value="Collectibles">Collectibles</option>
                                   <option value="Books & Arts">Books & Arts</option>
                                   <option value="Hobbies, Sports">Hobbies, Sports</option>
                                   <option value="Toys Stuffs">Toys Stuffs</option>
                                </select>


                              <select class="form-control" id="gender" name="gender">
                                <option value="0" selected>Choose One</option>
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                              </select>

                            </div>

                    <div class="form-group">
                        <label for="inputname">Product Price: </label>
                        <input type="number" class="form-control" placeholder=" &#8369 1,000" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Product Description:</label>
                        <textarea class="form-control" rows="5" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputname">Product Quantity:</label>
                        <input type="number" class="form-control" name="qty" required>
                    </div>
                    <!--    <div class="form-group">
                    <label for="inputname">Upload Your Product Image:</label>

                </div>  need to put code to upload pictures here lol -->


                    <div class="form-group">
                        <label>product image</label>
                        <input type="file" multiple="multiple" name="fileToUpload" id="fileToUpload">
                        <p class="help-block">Example "Recomended Image Size in pixel 400 X 300"</p>
                    </div>

                    <input type="hidden" name="ownerID" value="<?php echo $_SESSION['user_ID']; ?>">


                    <div class="form-group">
                        <div>
                            <button class="btn btn-primary" name="submit" type="submit">Add Product WHohoo!</button>
                            <button type="reset" class="btn btn-warning">Clear</button>
                        </div>
                    </div>
                    </form>


                    <hr>

                </div>
            </div>
        </div>

    <?php include 'footer.php';?>

    </body>

    </html>
