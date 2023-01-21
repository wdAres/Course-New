<?php



$active = "training";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

    <h5 class="css">Coperate Training </h5>



    <!-- classes list  -->

    <div class="dn-form-container">

        <div class="d-flex justify-content-between top">

            <h3>Coperate Training  Applicants</h3>

        </div>



        <table class="table">

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Email</th>

                <th>Number</th>

                <th>Company</th>
                <th>Technonlogy Used</th>
                <th>Compnay Location</th>



            </tr>

            <?php

            /* check if data exist */

            $select = mysqli_query($conn, "select * from corporate_training  ORDER BY id DESC ");

            $inc = 0;

            while ($item = mysqli_fetch_array($select)) {

                $inc++ ?>

                <tr>

                    <td><?php echo $inc; ?></td>

                    <td class="text-nowrap"><?php echo $item['ct_name']; ?></td>

                    <td class="text-nowrap"><?php echo $item['ct_email']; ?></td>

                    <td class="text-nowrap"><?php echo $item['ct_number']; ?></td>

                    <td class="text-nowrap"><?php echo $item['ct_company']; ?></td>
                    <td class="text-nowrap"><?php echo $item['ct_technology']; ?></td>
                    <td class="text-nowrap"><?php echo $item['ct_company_loc']; ?></td>

                </tr>

            <?php }
            ?>

        </table>

    </div>







    <?php include 'inc/footer.php' ?>