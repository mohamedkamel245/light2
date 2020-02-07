<?php

session_start();
$active='Cart';
include("includes/db.php");
include("functions/functions.php");

?>

<?php

    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_url='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);

    $check_product = mysqli_num_rows($run_product);

    if($check_product == 0){

        echo "<script>window.open('index.php','_self')</script>";

    }else{
        $row_products = mysqli_fetch_array($run_product);

    $p_cat_id = $row_products['p_cat_id'];
    
    $pro_title = $row_products['product_title'];
    
        
    
    $pro_price = $row_products['product_price'];
    
    $pro_sale_price = $row_products['product_sale'];
        
    $pro_desc = $row_products['product_desc'];
    
    $pro_img1 = $row_products['product_img1'];
    
    $pro_img2 = $row_products['product_img2'];
    
    $pro_img3 = $row_products['product_img3'];
    
    $pro_label = $row_products['product_label'];
        
        if($pro_label == ""){
            
        }else{
            
            $product_label = "
            
            <a class='label $pro_label' href='#' >
			<div class='thelabel'> $pro_label </div>
			<div class='labelBackground'></div>
			</a>
            
            ";
            
        }
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];

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
                        <a href="customer_register.php">تسجيل</a>
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
                    
                    <i class="fa fa-shopping-cart"><span><?php items(); ?> الوحدات الموجودة فى سلة التسوق الخاصة بك</span> </i>
                    
                    
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
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">الصفحة الرئيسية</a>
                   </li>
                   <li>
                       تسوق الان
                   </li>
                   
                   <li>
                       <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                   </li>
                   <li> <?php echo $pro_title; ?> </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-12"><!-- col-md-12 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->
                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="Product 3-c"></center>
                                   </div>
                               </div>
                               
                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">السابق</span>
                               </a><!-- left carousel-control Finish -->
                               
                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">التالي</span>
                               </a><!-- right carousel-control Finish -->
                               
                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                       
                       <?php echo $product_label; ?>
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center"> <?php echo $pro_title; ?> </h1>
                           
                           <?php add_cart(); ?>
                           
                           <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-md-7 Finish -->
                                    
                                    <label for="" class="col-md-5 control-label">كمية المنتجات</label>
                                   
                               </div><!-- form-group Finish -->
                               
                               <div class="form-group"><!-- form-group Begin -->
                                   
                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                       
                                       <select name="product_size" class="form-control"  oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')"><!-- form-control Begin -->
                                          
                                           <option disabled selected>اختر حجما</option>
                                           <option>صغير</option>
                                           <option>متوسط</option>
                                           <option>كبير</option>
                                           
                                       </select><!-- form-control Finish -->
                                       
                                   </div><!-- col-md-7 Finish -->
                                   
                                   <label class="col-md-5 control-label">حجم المنتج</label>
                                   
                               </div><!-- form-group Finish -->
                               
                               <?php
                               
                               if($pro_label == 'sale'){
                                   
                                   echo "
                                    <p class='price'>
                                    السعر: <del> $pro_price ريال </del><br/>
                                    <br/>
                                     تخفيض: $pro_sale_price ريال
                                     
                                     </p>
                                     ";
                                   
                                }else{
                                   
                                   echo "

                                     <p class='price'>
                                    $pro_price  ريال
                                     
                                     ";
                                }

                               ?>
                               
                               <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> أضف إلى السلة</button></p>
                               
                           </form><!-- form-horizontal Finish -->
                           
                       </div><!-- box Finish -->
                       
                       <div class="row" id="thumbs"><!-- row Begin -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product 4" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->
                           
                       </div><!-- row Finish -->
                       
                   </div><!-- col-sm-6 Finish -->
                   
                   
               </div><!-- row Finish -->
               
               <div class="box" id="details"><!-- box Begin -->
                       
                       <h4>تفاصيل المنتج</h4>
                   
                   <p>
                       
                       <?php echo $pro_desc; ?>
                       
                   </p>
                   
                       <h4>بحجم</h4>
                       
                       <ul>
                           <li>صغير</li>
                           <li>متوسط</li>
                           <li>كبير</li>
                       </ul>  
                       
                       <hr>
                   
               </div><!-- box Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">المنتجات التي ربما تحبها</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <?php 
                   
                    $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                    $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       $pro_id = $row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_price = $row_products['product_price'];
                        $pro_sale_price = $row_products['product_sale'];
                      
                        $pro_img1 = $row_products['product_img1'];
                        $pro_label = $row_products['product_label'];

                        if($pro_label == 'sale'){

                            $product_price = "<del> $pro_price ريال </del>";
                             $product_sale_price = "| $pro_sale_price ريال ";  
                        }else{

                            $product_price = " $pro_price ريال ";
                             $product_sale_price = "";  
                        }

                        if($pro_label == ""){

                        }else{
            
            $product_label = "
            
            <a class='label $pro_label' href='#' >
			<div class='thelabel'> $pro_label </div>
			<div class='labelBackground'></div>
			</a>
            
            ";
            
        }
        

        echo "
            <div class='col-md-3 col-sm-6 center-responsive'>
            
                <div class='product'>
                
                    <a href='details.php?pro_id=$pro_id'>
                    
                    <img src='admin_area/product_images/$pro_img1'  class='img-responsive'></a>

                    <div class='text'>
                    
                        <h3>
                        
                        <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                        
                        </h3>
                        
                        <p class='price'>
                        
                        $product_price &nbsp;$product_sale_price 
                        
                        </p>
                        
                        <p class='buttons'>
                        
                            <a href='details.php?pro_id=$pro_id' class='btn btn-default'>
                            
                            عرض التفاصيل
                            
                            </a>
                            
                            <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                            
                            <i class='fas fa-shopping-cart'></i> Add to cart
                            
                            </a>
                        </p>
                    </div>
                    
                    $product_label

                </div>
            </div>
        "; 
                     
                   }
                   
                   ?>
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-12 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php } ?>
