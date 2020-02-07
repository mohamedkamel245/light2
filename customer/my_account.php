<?php

session_start();

if(!isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../checkout.php','_self')</script>";
    
}else{

include("includes/db.php");
include("functions/functions.php");

?>
  
<!DOCTYE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>حسابي</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">   
</head>
<body>

    <div id="top"><!--   Top Begin -->
        
        <div id="container"><!--   container Begin -->
            
            <div class="col-md-6 offer"><!--   col-md-6 offer Begin -->
               
               <a href="checkout.php">سلة التسوق الخاصة بك <?php items(); ?>  | السعر الكلي:  <?php total_price(); ?> ريال </a>
                
                <a href="#" class="btn btn-success btn-sm">
                    
                    <?php
                    
                    if(!isset($_SESSION['customer_email'])){
                        
                        echo "Welcome: Guest";
                        
                        
                    }else{
                        
                        echo"Welcome: " .$_SESSION['customer_email'] . "";
                    }
                    
                    
                    
                    ?>
                </a>
                
            
            </div><!--   col-md-6 offer Finish -->
            
            <div class="col-md-6"><!--   col-md-6 Begin -->
                
                <ul class="menu"><!-- menu Begin -->
                    <li>
                        <a href="../customer_register.php">
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='../customer_register.php'> تسجيل </a>";

                               }else{

                                echo " <a href='../index.php'> متجرنا </a> ";

                               }
                           
                           ?>
                        </a>
                    </li>
                    <li>
                        <a href="my_account.php">حسابي</a>
                    </li>
                    <li>
                        <a href="../cart.php">الذهاب إلى السلة</a>
                    </li>
                    <li>
                        <a href="../checkout.php">
                            
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> تسجيل الدخول </a>";

                               }else{

                                echo " <a href='logout.php'> تسجيل الخروج </a> ";

                               }
                           
                           ?>
                            
                        </a>
                    </li>
                    
                </ul><!-- menu Begin -->
                
            
            </div><!--   col-md-6 Finish -->
        
        </div><!--   container Finish -->
    
    </div><!--   Top Finish -->
    
    <div id="navbar" class="navbar navbar-default"><!--   navbar navbar-default Begin -->
        
        <div class="container"><!--   container Begin -->
            
            <div class="navbar-header"><!--  navbar-header Begin -->
                
                <a href="../index.php" class="navbar-brand home"><!--  navbar-brand home Begin -->
                    
                    <img src="images/ecom-store-logo.jpg" alt="متجر ضوء" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.jpg" alt="متجر ضوء" class="visible-xs">
                
                </a><!--  navbar-brand home Finish -->
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    
                    <span class="sr-only">Toggle Navigation</span>
                    
                    <i class="fa fa-align-justify"></i>
                    
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                    <span class="sr-only"> بحث </span>
                    
                    <i class="fa fa-search"></i>
                    
                </button>
                
            </div><!-- navbar-header Finish  -->
            
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Gegin  -->
                
                <div class="padding-nav"><!-- padding-nav Gegin  -->
                    
                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin  -->
                        
                        <li>
                            <a href="../index.php">متجر ضوء</a>
                        </li>
                        <li>
                           <a href="../shop.php">تسوق الأن</a> 
                        </li>
                        <li class="active">
                            <a href="my_account.php">حسابي</a>
                        </li>
                        <li>
                            <a href="../cart.php">عربة التسوق</a>
                        </li>
                        <li>
                            <a href="../contact.php">اتصل بنا</a>
                        </li>
                    
                    </ul><!-- nav navbar-nav left Finish  -->
                
                </div><!-- padding-nav Finish  -->
                
                <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin  -->
                    
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> الوحدات الموجودة فى سلة التسوق الخاصة بك</span>
                    
                </a><!-- btn navbar-btn btn-primary right Finish  -->
                
                <div class="navbar-collapse collapes right"><!-- navbar-collapse collapes right Begin  -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin  -->
                        
                        <span class="sr-only">Toggle Search</span>
                        
                        <i class="fa fa-search"></i>
                        
                    </button><!-- btn btn-primary navbar-btn Finish  -->
                
                </div><!-- navbar-collapse collapes right Finish  -->
                
                <div class="collaps clearfix" id="search"><!-- collaps clearfix Begin  -->
                    
                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin  -->
                    
                        <div class="input-group"><!-- input-group Begin  -->
                        
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            
                            <span class="input-group-btn"><!-- input-group-btn Begin-->
                            
                            <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                            
                                <i class="fa fa-search"></i>
                                
                            </button><!-- btn btn-primary Finish -->
                                
                            </span><!-- input-group-btn Finish -->
                            
                        </div><!-- input-group Finish  -->
                        
                    </form><!-- navbar-form Finish  -->
                    
                </div><!-- collaps clearfix Finish  -->
                
            </div><!-- navbar-collapse collapse Finish  -->
            
        </div><!--   container Finish -->
        
    </div><!--   navbar navbar-default Finish -->  
    
    <div id="content"><!-- content Bgein -->
        
        <div class="container"><!-- container Bgein -->
            
            <div class="col-md-12"><!-- col-md-12 Bgein -->
                
                <ul class="breadcrumb"><!-- breadcrunmb Bgein -->
                    <li>
                    <a href="index.php"> الصفحة الرئيسيه </a>
                    </li>
                    <li>
                        حسابي
                    </li>
                </ul><!-- breadcrunmb Finish -->
                
            </div><!-- col-md-12 Finish -->
            
            
             
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <?php
                   
                   if (isset($_GET['my_orders'])){
                       include("my_orders.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['pay_offline'])){
                       include("pay_offline.php");
                   }
                   
                   ?>
                   
                    <?php
                   
                   if (isset($_GET['edit_account'])){
                       include("edit_account.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['change_pass'])){
                       include("change_pass.php");
                   }
                   
                   ?>
                   
                   <?php
                   
                   if (isset($_GET['delete_account'])){
                       include("delete_account.php");
                   }
                   
                   ?>
                   
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Bgein -->
                
    <?php
    
    include("includes/sidebar.php");
    
    ?>
                
            </div><!-- col-md-3 Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- content Finish -->
    
    <?php
    
    include("includes/footer.php");
    
    ?>
       
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>

</html>
<?php } ?>            