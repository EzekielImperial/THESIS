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
    <link rel="stylesheet" href="css/profile.css" />

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
                                        <li class="profile-li"><a class="profile-links" href="#">My Order</a></li>
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
                    <input class="navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
                    <button class="navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
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
            </div></div>
		<!--Size-->
			<div class="collapse navbar-collapse row" id="mySecondbar">
			<ul class="nav navbar-nav fontnav">
						<li><a href="#">BEST</a></li>
                        <li><a href="#">MAN</a></li>
                        <li><a href="#">WOMAN</a></li>
                        <li><a href="#">iACADEMY MERCHANDISE</a></li>
                        <li><a href="#">SHOES</a></li>
						<li><a href="#">ETC</a></li>
                    </ul>
                </li>
            </ul>
			</ul>
        </div>
		</div>
</nav>

	<!--First-->
  <?php
    $email = $_SESSION['email'];
    $query = $dbconn->query("SELECT * FROM users WHERE email='$email'");
    if($query->num_rows > 0){
      while($row = $query->fetch_assoc()) {
  ?>
  <div class="container">
    <h2>My profile</h2><br/>
    <div class="row">
      <div class="col-md-3">
        <ul class="user-side-menu">
          <div class="user-side-menu_bg">
            <div class="user-side-menu_name">
              <?php echo $row['firstName']. " " .$row['lastName']; ?>
            </div>
          </div>
          <li class="user-side-menu_link-wrapper user-side-menu_link-wrapper-selected">
            <a class="user-side-menu_link-selected" href="accountSetting.php">
              <div class="user-side-menu_link-text">Account Settings</div>
            </a>
          </li>
          <li class="user-side-menu_link-wrapper user-side-menu_link-wrapper-selected">
            <a class="user-side-menu_link" href="#">
              <div class="user-side-menu_link-text">Notifications</div>
            </a>
          </li>
          <li class="user-side-menu_link-wrapper user-side-menu_link-wrapper-selected">
            <a class="user-side-menu_link" href="#">
              <div class="user-side-menu_link-text">My Orders</div>
            </a>
          </li>
          <li class="user-side-menu_link-wrapper user-side-menu_link-wrapper-selected">
            <a class="user-side-menu_link" href="#">
              <div class="user-side-menu_link-text">My Products</div>
            </a>
          </li>
          <li class="user-side-menu_link-wrapper user-side-menu_link-wrapper-selected">
            <a class="user-side-menu_link" href="#">
              <div class="user-side-menu_link-text">My Sales</div>
            </a>
          </li>
          <li class="user-side-menu_link-wrapper user-side-menu_link-wrapper-selected">
            <a class="user-side-menu_link" href="#">
              <div class="user-side-menu_link-text">Sales Report</div>
            </a>
          </li>
        </ul>
      </div>
    <div class="col-md-9">
    <div class="page-wrapper">
      <form name="personalInfo" method="post" action="updateInfo.php">
        <fieldset>
          <h4>Personal Info</h4><hr/>
          <div class="control-group form-group">
            <div class="controls">
              <input type="email" class="form-control" name="email" id="email" readonly value=<?php echo $email ?>>
            </div>
          </div>
          <div class="row">
            <div class="control-group form-group col-lg-6">
              <div class="controls">
                <input type="text" class="form-control" name="firstName" id="firstName" value=<?php echo $row['firstName'] ?>>
              </div>
            </div>
            <div class="control-group form-group col-lg-6">
              <div class="controls">
                <input type="text" class="form-control" name="lastName" id="lastName" value=<?php echo $row['lastName'] ?>>
              </div>
            </div>
          </div>
            <div class="control-group form-group col-lg-6">
              <div class="controls">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="contactNum" id="contactNum" value=<?php echo $row['contactNum'] ?>>
              </div>
            </div>
            <div class="control-group form-group col-lg-6">
              <div class="controls">
                <label>Birthdate</label>
                <input type="date" class="form-control" name="birthDate" id="birthDate" required>
              </div>
            </div>
          <input type="submit" value="Update" class="btn btn-primary"> &nbsp;&nbsp;&nbsp;
          <input type="reset" value="Clear" class="btn">
        </fieldset>
        </form>
        <?php
            }
          }
        ?>

        <form name="changePw" method="post" action="updatePassword.php"><br/><br/>
          <h4>Change Password</h4><hr/>
          <div class="control-group form-group">
            <div class="controls">
              <input type="password" class="form-control" name="oldPassword" id="oldPassword" required placeholder="Old Password">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <input type="password" class="form-control" name="newPassword" id="newPassword" required placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <input type="password" class="form-control" name="confirmpw" id="confirmpw" required placeholder="Confirm Password">
            </div>
          </div>
          <input type="submit" value="Update" class="btn btn-primary"> &nbsp;&nbsp;&nbsp;
          <input type="reset" value="Clear" class="btn">
        </form>

        <fieldset><br/><br/>
          <h4>Shipping Info</h4><hr/>
          <?php $query = $dbconn->query("SELECT * FROM address WHERE email='$email'");
          if($query->num_rows > 0){
            while($row = $query->fetch_assoc()) {
          ?>
          <p>House No./Unit and Floor No.: <?php echo $row['houseNum']; ?></p>
          <p>Street: <?php echo $row['street']; ?></p>
          <p>Building: <?php echo $row['building']; ?></p>
          <p>Subd./Apartment/Village: <?php echo $row['subdivision']; ?></p>
          <p>Barangay: <?php echo $row['barangay']; ?></p>
          <p>City: <?php echo $row['city']; ?></p>
          <p>Province: <?php echo $row['province']; ?></p>
          <p>Zip Code: <?php echo $row['zipCode']; ?></p>
          <button id="address-btn" class="btn btn-info">Edit Address</button>
        </fieldset>
          <?php
            }
          } else {
            echo "<p>No listed Address.</p>";
            echo "<button id='address-btn' class='btn btn-info'>Add Address</button>";
          }
           ?>
      <div id="address-form">
      <form method="post" action="updateAddress.php">
        <fieldset><br/>
            <div class="control-group form-group">
              <div class="controls">
                <label>House No./Unit and Floor No.</label><small> eg. #72 or 1635 16/F</small>
                <input type="text" class="form-control" name="houseNum" id="houseNum" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Street</label>
                <input type="text" class="form-control" name="street" id="street" required>
              </div>
            </div>
            <div class="row">
              <div class="control-group form-group col-lg-6">
                <div class="controls">
                  <label>Building</label>
                  <input type="text" class="form-control" name="building" id="building">
                </div>
              </div>
              <div class="control-group form-group col-lg-6">
                <div class="controls">
                  <label>Subd./Apartment/Village</label>
                  <input type="text" class="form-control" name="subd" id="subd">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="control-group form-group col-lg-6">
                <div class="controls">
                  <label>Barangay</label>
                  <input type="text" class="form-control" name="brgy" id="brgy">
                </div>
              </div>
              <div class="control-group form-group col-lg-6">
                <div class="controls">
                  <label>City</label>
                  <input type="text" class="form-control" name="city" id="city" required>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="control-group form-group col-lg-6">
              <div class="controls">
                <label>Province</label>
                  <select class="form-control col-sm-2" name="province" id="province" required>
                      <option value="">--Select Province--</option>
                      <option value="Metro Manila">Metro Manila</option>
                      <option value="Abra">Abra</option>
                      <option value="Agusan del Norte">Agusan del Norte</option>
                      <option value="Agusan del Su">Agusan del Sur</option>
                      <option value="Aklan">Aklan</option>
                      <option value="Albay">Albay</option>
                      <option value="Antique">Antique</option>
                      <option value="Apayao">Apayao</option>
                      <option value="Aurora">Aurora</option>
                      <option value="Basilan">Basilan</option>
                      <option value="Bataan">Bataan</option>
                      <option value="Batanes">Batanes</option>
                      <option value="Batangas">Batangas</option>
                      <option value="Benguet">Benguet</option>
                      <option value="Biliran">Biliran</option>
                      <option value="Bohol">Bohol</option>
                      <option value="Bukidnon">Bukidnon</option>
                      <option value="Bulacan">Bulacan</option>
                      <option value="Cagayan">Cagayan</option>
                      <option value="Camarines Norte">Camarines Norte</option>
                      <option value="Camarines Sur">Camarines Sur</option>
                      <option value="Camiguin">Camiguin</option>
                      <option value="Capiz">Capiz</option>
                      <option value="Catanduanes">Catanduanes</option>
                      <option value="Cavite">Cavite</option>
                      <option value="Cebu">Cebu</option>
                      <option value="Compostela Valley">Compostela Valley</option>
                      <option value="Cotabato">Cotabato</option>
                      <option value="Davao Oriental">Davao Oriental</option>
                      <option value="Davao del Norte">Davao del Norte</option>
                      <option value="Davao del Sur">Davao del Sur</option>
                      <option value="Dinagat Islands">Dinagat Islands</option>
                      <option value="Eastern Samar">Eastern Samar</option>
                      <option value="Guimaras">Guimaras</option>
                      <option value="Ifugao">Ifugao</option>
                      <option value="Ilocos Norte">Ilocos Norte</option>
                      <option value="Ilocos Sur">Ilocos Sur</option>
                      <option value="Iloilo">Iloilo</option>
                      <option value="Isabela">Isabela</option>
                      <option value="Kalinga">Kalinga</option>
                      <option value="La Union">La Union</option>
                      <option value="Laguna">Laguna</option>
                      <option value="Lanao del Norte">Lanao del Norte</option>
                      <option value="Lanao del Sur">Lanao del Sur</option>
                      <option value="Leyte">Leyte</option>
                      <option value="Maguin">Maguindanao</option>
                      <option value="Marinduque">Marinduque</option>
                      <option value="Masbate">Masbate</option>
                      <option value="Mindoro Occidental">Mindoro Occidental</option>
                      <option value="Mindoro Oriental">Mindoro Oriental</option>
                      <option value="Misamis Occidental">Misamis Occidental</option>
                      <option value="Misamis Oriental">Misamis Oriental</option>
                      <option value="Mountain Province">Mountain Province</option>
                      <option value="Negros Occidental">Negros Occidental</option>
                      <option value="Negros Oriental">Negros Oriental</option>
                      <option value="North Cotabato">North Cotabato</option>
                      <option value="Northern Samar">Northern Samar</option>
                      <option value="Nueva Ecija">Nueva Ecija</option>
                      <option value="Nueva Vizcaya">Nueva Vizcaya</option>
                      <option value="Palawan">Palawan</option>
                      <option value="Pampanga">Pampanga</option>
                      <option value="Pangasinan">Pangasinan</option>
                      <option value="Quezon">Quezon</option>
                      <option value="Quirino">Quirino</option>
                      <option value="Rizal">Rizal</option>
                      <option value="Romblon">Romblon</option>
                      <option value="Samar">Samar</option>
                      <option value="Sarangani">Sarangani</option>
                      <option value="Siquijor">Siquijor</option>
                      <option value="Sorsogon">Sorsogon</option>
                      <option value="South Cotabato">South Cotabato</option>
                      <option value="Southern Leyte">Southern Leyte</option>
                      <option value="Sultan Kudarat">Sultan Kudarat</option>
                      <option value="Sulu">Sulu</option>
                      <option value="Surigao del Norte">Surigao del Norte</option>
                      <option value="Surigao del Sur">Surigao del Sur</option>
                      <option value="Tarlac">Tarlac</option>
                      <option value="Tawi-Tawi">Tawi-Tawi</option>
                      <option value="Zambales">Zambales</option>
                      <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
                      <option value="Zamboanga del Norte">Zamboanga del Norte</option>
                      <option value="Zamboanga del Sur">Zamboanga del Sur</option>
                  </select>
                </div>
              </div>
              <div class="control-group form-group col-lg-6">
                <div class="controls">
                  <label>Zip Code</label>
                  <input type="number" class="form-control" name="zipCode" id="zipCode" required>
                </div>
              </div>
            </div>
            <input type="submit" value="Update" class="btn btn-primary"> &nbsp;&nbsp;&nbsp;
            <input type="reset" value="Clear" class="btn">
        </fieldset>
        </form>
      </div>
      <a href="deactivatePage.php" class="btn btn-danger deactivate">Deactivate Account</a>
    </div>
  </div>
</div>
</div>
  <br/><hr style="width:80%;"><br/>

    <?php include 'footer.php';?>


    <script type="text/javascript">
      var button = document.getElementById("address-btn");
      var myDiv = document.getElementById("address-form");

      function show() {
        myDiv.style.visibility = "visible";
      }

      function hide() {
        myDiv.style.visibility = "hidden";
      }

      function toggle() {
        if (myDiv.style.visibility === "hidden") {
            show();
        } else {
            hide();
        }
      }

      hide();

      button.addEventListener("click", toggle, false);
    </script>

</body>
</html>
