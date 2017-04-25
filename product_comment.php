
<?php
     $sql = 'select * from rating where product_ID =' .$pNAME;
     $result = $con->query($sql);
     ?>
     <table>
       <thead>
         <tr>
     
           <td>User</td>
           <td>Comments</td>
           <td>Date</td>
           <td>rate </td>
           <td>Buttons</td>
         </tr>

       </thead>
           <tbody>


     <?php
     while($row = $result->fetch_assoc())
     {
       $datetime = explode(' ', $row['product_date']);
       $date = $datetime[0];
       $time = $datetime[1];
       if($date == Date('Y-m-d'))
       $row['product_date'] = $time;
       else
       $row['product_date'] = $date;
       ?>

       <tr>
         <td><?php echo $_SESSION['email']?></td>
         <td><?php echo $row['product_comment']?></td>
         <td><?php echo $row['product_date']?></td>
         <td><?php $startest= $row['rate'];
           if($startest == 5){?>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <?php }elseif($startest == 4){ ?>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <?php }elseif($startest == 3){ ?>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <?php }elseif($startest == 2){ ?>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <?php }else{ ?>
           <span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow"></span>
           <?php } ?></td>
           <td><div class="commentBtn">
           <a href="#" class="comt modify">Edit</a>
           <a href="#" class="comt delete">Delete</a>
           </div></td>
       </tr>
       <?php
     }
     ?>
   </tbody>
 </table>









<form action="comment_update.php" method="post">
  <input type="hidden" name="productID" id="productID" value="<?php echo $pNAME?>">
  <input type="hidden" name="user" id="user" value="<?php echo $email?>">


  <table>
    <tr>
      <td>
        <div class="rating">
         <p>RATE SELLER : </p>
         <input class="stars" type="radio" id="star5" name="rate" value="5" />
         <label class = "full" for="star5" title="Awesome - 5 stars"></label>
         <input class="stars" type="radio" id="star4" name="rate" value="4" />
         <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
         <input class="stars" type="radio" id="star3" name="rate" value="3" />
         <label class = "full" for="star3" title="Meh - 3 stars"></label>
         <input class="stars" type="radio" id="star2" name="rate" value="2" />
         <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
         <input class="stars" type="radio" id="star1" name="rate" value="1" />
         <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
        </div>
      </td>
      <td><textarea class="form-control" rows="5" id="comment" name="comment" required="required"></textarea></td>
      <td><input name="submit" type="submit"  class="btn btn-info" value="Submit comment" />
      </tr>

    </table>
</form>
