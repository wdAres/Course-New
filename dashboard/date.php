<?php



$active = "date";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

   <h5 class="css">Manage Date </h5>



   <!-- main header content  -->

   <div class="dn-form-container">

      <div class="d-flex justify-content-between top">

         <h3>Add New Curriculum</h3>



         <?php

         if (isset($_GET['id'])) { ?>

            <button type="submit" form="class-form" class="btn btn-primary" name="edit">Update</button>

         <?php } else { ?>

            <button type="submit" form="class-form" name="save" class="btn btn-primary">Save</button>

         <?php } ?>



      </div>





      <!-- handle form request for classes -->

      <?php

      /* find by id and update */



      $date = '';

      $month = '';

      $time = '';



      if (isset($_GET['id'])) {

         $find_id = $_GET['id'];



         $query = mysqli_query($conn, "select * from date_table  where id = $find_id");



         if ($query) {

            $find_result = mysqli_fetch_array($query);

            $date = $find_result['date'];

            $month = $find_result['month'];
            $time = $find_result['time'];

            // $logo =  $find_result['image'];

         }

      }





      if (isset($_GET['delete'])) {

         $find_id = $_GET['delete'];



         $query = mysqli_query($conn, "delete from date_table where id = $find_id");



         if ($query) {

            set_ss("date deleted with id = $find_id successfuly", $_SERVER['PHP_SELF']);

         } else {

            set_ss("date delete with id = $find_id failed", $_SERVER['PHP_SELF'], 'error');

         }

      }







      /* post or update content on request */

      if (isset($_POST['save'])) {



         $date = htmlspecialchars($_POST['date']);
         $month = htmlspecialchars($_POST['month']);
         $time = htmlspecialchars($_POST['time']);


         /* post if id null (content not available in DB) */

         $query = mysqli_query($conn, "insert into date_table (date,month,time) values ('$date','$month','$time')");



         if ($query) {

            set_ss('Date inserted successfully', $_SERVER['PHP_SELF']);

         } else {

            set_ss('Date failed to insert' . mysqli_error($conn), $_SERVER['PHP_SELF'], 'error');

         }

      }



      /* update if id not null (content available in DB) */

      if (isset($_POST['edit'])) {



         $id = $_GET['id'];

         $date = $_POST['date'];
         $month = $_POST['month'];
         $time = $_POST['time'];



         if ($_FILES['date']['month']['time']) {


            $query = mysqli_query($conn, "UPDATE date_table SET 

            date='$date',
            month='$month',
            time='$time' WHERE id = $id");

         } else {

            $query = mysqli_query($conn, "UPDATE date_table SET date='$date',

            month='$month',
            time='$time'

            WHERE id = $id");

         }



         if ($query) {

            set_ss('Date updated successfully', $_SERVER['PHP_SELF']);

         } else {

            set_ss('Date failed to update' . $id . mysqli_error($conn), $_SERVER['PHP_SELF'], 'error');

         }

      }





      ?>

      <!-- handle form request for main form content -->

      <form action="<?php $_SERVER['PHP_SELF']; ?>

      <?php isset($_GET['id']) ? '?id=' . $_GET['id'] : ''; ?>" method="POST" id="class-form" enctype="multipart/form-data">

         <div class="mb-3">

            <label for="date" class="form-label">Date</label>

            <input type="text" name="date" value="<?php echo $date; ?>" required class="form-control" id="date" placeholder="type....">

         </div>



         <div class="mb-3">

            <label for="month" class="form-label">Month</label>

            <input type="text" name="month" value="<?php echo $month; ?>" required class="form-control" id="month" placeholder="type....">

         </div>


         <div class="mb-3">

            <label for="time" class="form-label">time</label>

            <input type="text" name="time" value="<?php echo $time; ?>" required class="form-control" id="time" placeholder="type....">

         </div>


      </form>



   </div>



   <!-- classes list  -->

   <div class="dn-form-container">

      <div class="d-flex justify-content-between top">

         <h3>Date</h3>

      </div>

            

            <table class="table">

                 <tr>

                    <th>ID</th>

                    <th>Date</th>

                    <th>Month</th>

                    <th>Time</th>

                 </tr>

                  <?php

         /* check if data exist */

         $data = mysqli_query($conn, "select * from date_table ");

         while ($item = mysqli_fetch_array($data)) {

            ?>

            <tr>

               <td><?php echo $item['date']; ?></td>

               <td><?php echo $item['month']; ?></td>

               <td><?php echo $item['time']; ?></td>


               <td>

                  <a href="<?php $_SERVER['PHP_SELF']; ?>?id=<?php echo $item['id']; ?>" class="btn-sm text-success"><i class="fas fa-edit"></i></a>

                  <a href="<?php $_SERVER['PHP_SELF']; ?>?delete=<?php echo $item['id']; ?>" class="btn-sm text-danger"><i class="fas fa-trash"></i></a>

               </td>

            </tr>

         <?php }

         ?>

            </table>

   </div>









   <?php include 'inc/footer.php' ?>