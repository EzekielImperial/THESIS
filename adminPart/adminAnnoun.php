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
    <link rel="stylesheet" href="../css/adminOnly.css">
    <!--Javascript-->
    <script src="../jsforAdmin/jsAdmin.js"></script>

</head>

<body>

    <?php
        session_start();
        require_once('../connector.php');
    ?>
    <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="adminDashboard.php">
				Administrator
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" action="adminResults.php" method="POST" role="search">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../index.php">Back to main</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
              <?php if(isset($_SESSION['email'])&& $_SESSION['userType'] == 'admin'){ ?>
							<li class="dropdown-header">SETTINGS</li>
              <li class="profile-li"><a class="profile-links" href="adminDashboard.php">Admin Dashboard</a></li>
              <li class="profile-li"><a class="profile-links" href="../accountSetting.php">Account Setting</a></li>
              <li class="profile-li"><a class="profile-links" href="#">Change Password </a></li>
              <li class="profile-li"><a class="profile-links" href="../logout.php">logout</a></li>
							<li class="divider"></li>

              <?php }else { ?>
                      <li class="profile-li"><a class="profile-links" href="../login.php">LOGIN</a></li>
                      <li class="profile-li"><a class="profile-links" href="../signUp.php">REGISTER</a></li>
                      <?php } ?>



						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

<!--Top end-->
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
         <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
             <div class="absolute-wrapper"> </div>
              <!-- Menu -->
               <div class="side-menu">
                   <nav class="navbar navbar-default" role="navigation">
                        <!-- Main Menu -->
                           <div class="side-menu-container">
                                 <ul class="nav navbar-nav">
                                        <li class="active"><a href="adminDashboard.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li> <!--Dashboard = main -->


                                             <li class="panel panel-default" id="dropdown">  <!-- Dropdown for register-->
                                                   <a data-toggle="collapse" href="#dropdown-lvl1">
                                                          <span class="glyphicon glyphicon-user"></span> User list <span class="caret"></span>
                                                  </a>

                                        <!-- Dropdown level 1 -->
                                        <div id="dropdown-lvl1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                        <li><a href="adminViewlist.php">View All List</a></li>
                                        <li><a href="#">Soon to be</a></li>
                                        <li><a href="#">Soon to be</a></li>

                                      </ul>
                                    </div>
                                  </div>
                                </li><!--End of dropdown for register-->


                             <li class="panel panel-default" id="dropdown"><!--Dropdown for product-->
                                   <a data-toggle="collapse" href="#dropdown-lvl2">
                                          <span class="glyphicon glyphicon-user"></span> Product Settings <span class="caret"></span>
                                  </a>

      <!-- Dropdown level 1 -->
      <div id="dropdown-lvl2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="nav navbar-nav">
            <li><a href="adminprodAdd.php">Add product</a></li>
            <li><a href="adminprodEdit.php">Edit product</a></li>
            <li><a href="adminprodDel.php">Delete product</a></li>


          </ul>
        </div>
      </div>
    </li><!--End of Dropdown for product-->
    <li><a href="adminAnnoun.php"><span class="glyphicon glyphicon-plane"></span> Announcement</a></li>
         <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Notification</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

  </ul>
</div><!-- /.navbar-collapse -->
</nav>

</div>
</div>  		</div>




<!--Code Starts Here-->




<div class="container">
     <table>
       <h1>Announcement</h1>
     <thead>
       <tr>
         <th>Number</th>
         <th>Title</th>
         <th>Author</th>
         <th>Date</th>
         <th>Hit</th>
       </tr>
     </thead>
     <tbody>


       <?php
            $sql = 'select * from announcement order by board_no desc';
            $result = $dbconn->query($sql);
            while($row = $result->fetch_assoc())
            {
              $datetime = explode(' ', $row['board_date']);
              $date = $datetime[0];
              $time = $datetime[1];
              if($date == Date('Y-m-d'))
              $row['board_date'] = $time;
              else
              $row['board_date'] = $date;
              ?>
              <tr>
                <td><?php echo $row['board_no']?></td>
                <td><a href="./adminAnnoun_view.php?bno=<?php echo $row['board_no']?>"><?php echo $row['board_title']?></a></td>
                <td><?php echo $row['board_admin']?></td>
                <td><?php echo $row['board_date']?></td>
                <td><?php echo $row['board_hit']?></td>
              </tr>
              <?php
            }
            ?>
     </tbody>
   </table>
   <div class="form-group">
       <a href="adminWrite.php" class="btn btn-info pull-right" role="button" >Write</a>
   </div>
 </div>








  	</div>

    <?php include 'adminfooter.php';?>



    </body>

    </html>
