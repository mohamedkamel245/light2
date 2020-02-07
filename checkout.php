<?php

    $active='Account';
    include("includes/header.php");
?>
    
    
    <div id="content"><!-- content Bgein -->
        
        <div class="container"><!-- container Bgein -->
            
            <div class="col-md-12"><!-- col-md-12 Bgein -->
                
                <ul class="breadcrumb"><!-- breadcrunmb Bgein -->
                    <li>
                    <a href="index.php">الصفحة الرئيسية</a>
                    </li>
                    <li>
                     طرق الدفع
                    </li>
                </ul><!-- breadcrunmb Finish -->
                
            </div><!-- col-md-12 Finish -->
            
            <div class="col-md-3"><!-- col-md-3 Bgein -->
               
                
            </div><!-- col-md-3 Finish -->
            
            <div class="col-md-9"><!-- col-md-9 Begin -->
           
           <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("customer/customer_login.php");
               
           }else{
               
               include("payment_options.php");
               
           }
           
           ?>
           
           </div><!-- col-md-9 Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- content Finish -->
    
    <?php
    
    include("includes/footer.php");
    
    ?>
       
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
