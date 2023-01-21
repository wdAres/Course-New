<?php



$active = "career";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

   <h5 class="css">Career Counselling Form</h5>



   <!-- classes list  -->

   <div class="dn-form-container">

      <div class="d-flex justify-content-between top">

         <h3>Career Counselling Form</h3>

      </div>



      <table class="table">

         <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Number</th>




         </tr>

         <?php

         /* check if data exist */

         $select = mysqli_query($conn, "select * from career ORDER BY id DESC ");

         $inc = 0;

         while ($item = mysqli_fetch_array($select)) {

               $inc++ ?>

               <tr>

                  <td><?php echo $inc; ?></td>

                  <td class="text-nowrap"><?php echo $item['con_name']; ?></td>

                  <td class="text-nowrap"><?php echo $item['con_email']; ?></td>

                  <td class="text-nowrap"><?php echo $item['con_number']; ?></td>

               </tr>

         <?php }
         ?>

      </table>

   </div>







   <?php include 'inc/footer.php' ?>