<link rel="stylesheet" href="css/design.css" />
<link rel="stylesheet" href="css/profile.css" />
<link rel="stylesheet" href="css/productsPages.css" /> 

<a href="productSort.php">back whohoo!</a>
<br>
<br>


<?php
  $short = $_POST['ShortA'];


switch ($short) {
    case "high":
        
        $con=mysqli_connect('localhost','root','','imarketdatabase');
        $results = mysqli_query ($con,'SELECT * FROM products order by price DESC');
        if($results->num_rows > 0) {
        while($row = mysqli_fetch_array($results)){
          echo'

            <div class ="proBox1">
            <img src="productImages/' .$row['productImage']. '" width="60%" height="60%"/>
            <br>
            <a href="productPage1.php?pname='.$row['productName'].'" style="color:black; text-decoration:none;";>'.$row['productName'].'</a> <br>
            '.$row['shortDes'].' <br />
            ₱ '.$row['price'].'
            <br>
            <form class="buttons1" method="POST" action="productEdit.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-warning" type="submit" value="Edit">
            </form></td><td>
            <form class="buttons1" method="POST" action="productDelete.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </div>
            ';
        }
      } else {
        echo "<h3>No products listed.</h3><br/>";
        echo "<a href='productAdd.php' class='btn btn-primary'>Add new product</a>";
      }
        mysqli_close($con);
        break;
    case "low":
        
        $con=mysqli_connect('localhost','root','','imarketdatabase');
        $results = mysqli_query ($con,'SELECT * FROM products order by price ASC');
        if($results->num_rows > 0) {
        while($row = mysqli_fetch_array($results)){
          echo'

            <div class ="proBox1">
            <img src="productImages/' .$row['productImage']. '" width="60%" height="60%"/>
            <br>
            <a href="productPage1.php?pname='.$row['productName'].'" style="color:black; text-decoration:none;";>'.$row['productName'].'</a> <br>
            '.$row['shortDes'].' <br />
            ₱ '.$row['price'].'
            <br>
            <form class="buttons1" method="POST" action="productEdit.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-warning" type="submit" value="Edit">
            </form></td><td>
            <form class="buttons1" method="POST" action="productDelete.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </div>
            ';
        }
      } else {
        echo "<h3>No products listed.</h3><br/>";
        echo "<a href='productAdd.php' class='btn btn-primary'>Add new product</a>";
      }
        mysqli_close($con);
   

        break;
    case "dateold":
        $con=mysqli_connect('localhost','root','','imarketdatabase');
        $results = mysqli_query ($con,'SELECT * FROM products order by date_created ASC');
        if($results->num_rows > 0) {
        while($row = mysqli_fetch_array($results)){
          echo'

            <div class ="proBox1">
            <img src="productImages/' .$row['productImage']. '" width="60%" height="60%"/>
            <br>
            <a href="productPage1.php?pname='.$row['productName'].'" style="color:black; text-decoration:none;";>'.$row['productName'].'</a> <br>
            '.$row['shortDes'].' <br />
            '.$row['date_created'].' <br />
            ₱ '.$row['price'].'
            <br>
            <form class="buttons1" method="POST" action="productEdit.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-warning" type="submit" value="Edit">
            </form></td><td>
            <form class="buttons1" method="POST" action="productDelete.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </div>
            ';
        }
      } else {
        echo "<h3>No products listed.</h3><br/>";
        echo "<a href='productAdd.php' class='btn btn-primary'>Add new product</a>";
      }
        mysqli_close($con);
        break;
    
    case "datenew":
    	 $con=mysqli_connect('localhost','root','','imarketdatabase');
        $results = mysqli_query ($con,'SELECT * FROM products order by date_created DESC');
        if($results->num_rows > 0) {
        while($row = mysqli_fetch_array($results)){
          echo'

            <div class ="proBox1">
            <img src="productImages/' .$row['productImage']. '" width="60%" height="60%"/>
            <br>
            <a href="productPage1.php?pname='.$row['productName'].'" style="color:black; text-decoration:none;";>'.$row['productName'].'</a> <br>
            '.$row['shortDes'].' <br />
            '.$row['date_created'].' <br />
            ₱ '.$row['price'].'
            <br>
            <form class="buttons1" method="POST" action="productEdit.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-warning" type="submit" value="Edit">
            </form></td><td>
            <form class="buttons1" method="POST" action="productDelete.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </div>
            ';
        }
      } else {
        echo "<h3>No products listed.</h3><br/>";
        echo "<a href='productAdd.php' class='btn btn-primary'>Add new product</a>";
      }
        mysqli_close($con);
        break;
        
        case "sold":

        echo " <h2> these product is soldout! </h2> <br>";

        	 $con=mysqli_connect('localhost','root','','imarketdatabase');
        $results = mysqli_query ($con,'SELECT * FROM products WHERE productStatus LIKE "soldOut"');
        if($results->num_rows > 0) {
        while($row = mysqli_fetch_array($results)){
          echo'

            <div class ="proBox1">
            <img src="productImages/' .$row['productImage']. '" width="60%" height="60%"/>
            <br>
            <a href="productPage1.php?pname='.$row['productName'].'" style="color:black; text-decoration:none;";>'.$row['productName'].'</a> <br>
            '.$row['shortDes'].' <br />
            '.$row['productStatus'].' <br />
            ₱ '.$row['price'].'
            <br>
            <form class="buttons1" method="POST" action="productEdit.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-warning" type="submit" value="Edit">
            </form></td><td>
            <form class="buttons1" method="POST" action="productDelete.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </div>
            ';
        }
      } else {
        echo "<h3>No products listed.</h3><br/>";
        echo "<a href='productAdd.php' class='btn btn-primary'>Add new product</a>";
      }
        mysqli_close($con);
        	break;
        
        case "sale":

        echo " <h2> these product are available and on sale! </h2> <br>";

        	 $con=mysqli_connect('localhost','root','','imarketdatabase');
        $results = mysqli_query ($con,'SELECT * FROM products WHERE productStatus LIKE "onSale"');
        if($results->num_rows > 0) {
        while($row = mysqli_fetch_array($results)){
          echo'

            <div class ="proBox1">
            <img src="productImages/' .$row['productImage']. '" width="60%" height="60%"/>
            <br>
            <a href="productPage1.php?pname='.$row['productName'].'" style="color:black; text-decoration:none;";>'.$row['productName'].'</a> <br>
            '.$row['shortDes'].' <br />
            '.$row['productStatus'].' <br />
            ₱ '.$row['price'].'
            <br>
            <form class="buttons1" method="POST" action="productEdit.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-warning" type="submit" value="Edit">
            </form></td><td>
            <form class="buttons1" method="POST" action="productDelete.php">
            <input type="hidden" name="PNAME" value="'.$row['productName'].'" />
            <input class="btn btn-danger" type="submit" value="Delete">
            </form>
            </div>
            ';
        }
      } else {
        echo "<h3>No products listed.</h3><br/>";
        echo "<a href='productAdd.php' class='btn btn-primary'>Add new product</a>";
      }
        mysqli_close($con);
        	break;

    default:
        echo "error shorting sorry!- khelly";
}
?>