<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>متجر ضوء</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">   
</head>
<body>

    <div id="top"><!--   Top Begin -->
        
        <div id="container"><!--   container Begin -->
            
            <div class="col-md-6 offer"><!--   col-md-6 offer Begin -->
               
               
                <a href="checkout.php"> سلة التسوق الخاصة بك <?php items(); ?>  | السعر الكلي:  <?php total_price(); ?> ريال </a>
                
                <a href="#" class="btn btn-success btn-sm">
                    
                    <?php
                    
                    if(!isset($_SESSION['customer_email'])){
                        
                        echo "مرحبا بك في متجرنا";
                        
                        
                    }else{
                        
                        echo"مرحب: " .$_SESSION['customer_email'] . "";
                    }
                    
                    ?>
                    </a>
                
            
            </div><!--   col-md-6 offer Finish -->
            
            <div class="col-md-6"><!--   col-md-6 Begin -->
                
                <ul class="menu"><!-- menu Begin -->
                    <li>
                        <a href="customer_register.php">
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='customer_register.php'> تسجيل </a>";

                               }else{

                                echo " <a href='index.php'> متجرنا </a> ";

                               }
                           
                           ?>
                        </a>
                    </li>
                    <li>
                        <a href="checkout.php">حسابي</a>
                    </li>
                    <li>
                        <a href="cart.php">الذهاب إلى السلة</a>
                    </li>
                    <li>
                        <a href="checkout.php">
                            
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='checkout.php'> تسجيل الدخول </a>";

                               }else{

                                echo " <a href='logout.php'> تسجيل خروج </a> ";

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
                
                <a href="index.php" class="navbar-brand home"><!--  navbar-brand home Begin -->
                    
                    <img src="images/ecom-store-logo.jpg" alt="M-dev-Store Loge" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.jpg" alt="M-dev-Store Loge Mobile" class="visible-xs">
                
                </a><!--  navbar-brand home Finish -->
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    
                    <span class="sr-only">Toggle Navigation</span>
                    
                    <i class="fa fa-align-justify"></i>
                    
                </button>
                
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    
                    <span class="sr-only">Toggle Search</span>
                    
                    <i class="fa fa-search"></i>
                    
                </button>
                
            </div><!-- navbar-header Finish  -->
            
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Gegin  -->
                
                <div class="padding-nav"><!-- padding-nav Gegin  -->
                    
                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin  -->
                        
                        <li class="<?php if($active=='Home') echo"active"; ?>">
                            <a href="index.php">الصفحة الرئيسية</a>
                        </li>
                        <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="shop.php">تسوق الان</a> 
                        </li>
                        <li class="<?php if($active=='Account') echo"active"; ?>">
                            
                            <li class="<?php if($active=='Account') echo"active"; ?>">
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>حسابي</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>حسابي</a>"; 
                               
                           }
                           
                           ?>
                            
                        </li>
                        <li class="<?php if($active=='Cart') echo"active"; ?>">
                            <a href="cart.php">عربة التسوق</a>
                        </li>
                        <li class="<?php if($active=='Contact') echo"active"; ?>">
                            <a href="contact.php">اتصل بنا</a>
                        </li>
                    
                    </ul><!-- nav navbar-nav left Finish  -->
                
                </div><!-- padding-nav Finish  -->
                
                <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin  -->
                    
                    <span> الوحدات الموجودة فى سلة التسوق الخاصة بك <?php items(); ?> </span> <i class="fa fa-shopping-cart"></i>
                    
                    
                </a><!-- btn navbar-btn btn-primary right Finish  -->
                
                <div class="navbar-collapse collapes right"><!-- navbar-collapse collapes right Begin  -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin  -->
                        
                        <span class="sr-only">Toggle Search</span>
                        
                        <i class="fa fa-search"></i>
                        
                    </button><!-- btn btn-primary navbar-btn Finish  -->
                
                </div><!-- navbar-collapse collapes right Finish  -->
                
                <div class="collapse clearfix" id="search"><!-- collaps clearfix Begin  -->
                    
                    <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin  -->
                    
                        <div class="input-group"><!-- input-group Begin  -->
                        
                        <span class="input-group-btn"><!-- input-group-btn Begin-->
                            
                            <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                            
                                <i class="fa fa-search"></i>
                                
                            </button><!-- btn btn-primary Finish -->
                                
                            </span><!-- input-group-btn Finish -->
                        
                            <input type="text" class="form-control" placeholder="بحث" name="user_query" required>
                            
                            
                            
                        </div><!-- input-group Finish  -->
                        
                    </form><!-- navbar-form Finish  -->
                    
                </div><!-- collaps clearfix Finish  -->
                
            </div><!-- navbar-collapse collapse Finish  -->
            
        </div><!--   container Finish -->
        
    </div><!--   navbar navbar-default Finish -->