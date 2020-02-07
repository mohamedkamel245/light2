<?php 

    $active='Shop';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                   Terms & Conditions | Refund
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->
               
               <div class="box"><!-- box Begin -->
               
               <ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Begin -->
                   
                   <?php
                   
                  
                   
                   $get_terms = "select * from terms LIMIT 0,1";

                    $run_terms = mysqli_query($con,$get_terms);

                        while($row_terms = mysqli_fetch_array($run_terms)){ 

                        $term_title = $row_terms['term_title'];

                        $term_link = $row_terms['term_link'];
                   
                   ?>
                   
                   <li class="active">

                    <a data-toggle="pill" href="#<?php echo $term_link; ?>">

                    <?php echo $term_title; ?>

                    </a>
                   
                   </li>
                   
                   <?php } ?>
                   
                   <?php

                    $count_terms = "select * from terms";

                    $run_count = mysqli_query($con,$count_terms);

                    $count = mysqli_num_rows($run_count);

                    $get_terms = "select * from terms LIMIT 1,$count";

                    $run_terms = mysqli_query($con,$get_terms);

                    while($row_terms = mysqli_fetch_array($run_terms)){

                    $term_title = $row_terms['term_title'];

                    $term_link = $row_terms['term_link'];

                    ?>

                    <li>

                    <a data-toggle="pill" href="#<?php echo $term_link; ?>">

                    <?php echo $term_title; ?>

                    </a>

                    </li>

                    <?php } ?>
                   
               </ul><!-- nav nav-pills nav-stacked Finish -->
               
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
           
           
           <div class="col-md-9"><!-- col-md-9 Starts -->

                    <div class="box"><!-- box Starts -->

                    <div class="tab-content" ><!-- tab-content Starts -->

                    <?php

                    $get_terms = "select * from terms LIMIT 0,1";

                    $run_terms = mysqli_query($con,$get_terms);

                    while($row_terms = mysqli_fetch_array($run_terms)){

                    $term_title = $row_terms['term_title'];

                    $term_desc = $row_terms['term_desc'];

                    $term_link = $row_terms['term_link'];

                    ?>

                    <div id="<?php echo $term_link; ?>" class="tab-pane fade in active" ><!-- tab-pane fade in active Starts -->

                    <h1> <?php echo $term_title; ?>  </h1>

                    <p> <?php echo $term_desc; ?> </p>

                    </div><!-- tab-pane fade in active Ends -->

                    <?php } ?>


                    <?php

                    $count_terms = "select * from terms";

                    $run_count = mysqli_query($con,$count_terms);

                    $count = mysqli_num_rows($run_count);

                    $get_terms = "select * from terms LIMIT 1,$count";

                    $run_terms = mysqli_query($con,$get_terms);

                    while($row_terms = mysqli_fetch_array($run_terms)){

                    $term_title = $row_terms['term_title'];

                    $term_desc = $row_terms['term_desc'];

                    $term_link = $row_terms['term_link'];

                    ?>

                    <div id="<?php echo $term_link; ?>" class="tab-pane fade in"><!-- tab-pane fade in Starts -->


                    <h1><?php echo $term_title; ?></h1>

                    <p><?php echo $term_desc; ?></p>


                    </div><!-- tab-pane fade in Ends -->

                    <?php } ?>

                    </div><!-- tab-content Ends -->

                    </div><!-- box Ends -->


                    </div><!-- col-md-9 Ends -->
    
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->



           <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>