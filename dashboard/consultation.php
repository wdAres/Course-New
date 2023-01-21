<?php



$active = "consultation";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

   <h5 class="css">Consultation Forms</h5>



   <!-- classes list  -->

   <div class="dn-form-container">

      <div class="d-flex justify-content-between top">

         <h3>Consultation Forms</h3>

      </div>



      <table class="table">

         <tr>

            <th>ID</th>

            <th>Email</th>

            <th>Number</th>


            

         </tr>

         <?php

         /* check if data exist */

         $select = mysqli_query($conn, "select * from consultation ORDER BY id DESC ");

         $inc = 0;

         while ($item = mysqli_fetch_array($select)) {

            $inc++ ?>

            <tr>

               <td><?php echo $inc; ?></td>

               <td class="text-nowrap"><?php echo $item['c_email']; ?></td>

               <td class="text-nowrap"><?php echo $item['c_number']; ?></td>

            </tr>

         <?php }

         ?>

      </table>

   </div>







   <?php include 'inc/footer.php' ?>