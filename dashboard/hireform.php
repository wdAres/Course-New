<?php



$active = "hire";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

   <h5 class="css">Hire Form</h5>



   <!-- classes list  -->

   <div class="dn-form-container">

      <div class="d-flex justify-content-between top">

         <h3>Hire Form Applicants</h3>

      </div>



      <table class="table">

         <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

            <th>Number</th>

            <th>Company</th>
            <th>Experience</th>
            <th>Role</th>
            <th>City</th>



         </tr>

         <?php

         /* check if data exist */

         $select = mysqli_query($conn, "select * from hire_form ORDER BY id DESC ");

         $inc = 0;

         while ($item = mysqli_fetch_array($select)) {

               $inc++ ?>

               <tr>

                  <td><?php echo $inc; ?></td>

                  <td class="text-nowrap"><?php echo $item['a_name']; ?></td>

                  <td class="text-nowrap"><?php echo $item['a_email']; ?></td>

                  <td class="text-nowrap"><?php echo $item['a_number']; ?></td>

                  <td class="text-nowrap"><?php echo $item['a_company']; ?></td>
                  <td class="text-nowrap"><?php echo $item['a_experience']; ?></td>
                  <td class="text-nowrap"><?php echo $item['a_role']; ?></td>
                  <td class="text-nowrap"><?php echo $item['a_city']; ?></td>

               </tr>

         <?php }
         ?>

      </table>

   </div>







   <?php include 'inc/footer.php' ?>