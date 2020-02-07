<?php

session_start();
$active='Cart';
include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYE html>
<html dir="rtl">
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
             <a href="index.php" class="navbar-brand home"><!--  navbar-brand home Begin -->
                    
                    <img src="images/ecom-store-logo.jpg" alt="M-dev-Store Loge" class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.jpg" alt="M-dev-Store Loge Mobile" class="visible-xs">
                
                </a><!--  navbar-brand home Finish -->
            <div class="navbar-header"><!--  navbar-header Begin -->
                
                
                
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
    
    <div id="content"><!-- content Bgein -->
        
        <div class="container"><!-- container Bgein -->
            
            <div class="col-md-12"><!-- col-md-12 Bgein -->
                
                <ul class="breadcrumb"><!-- breadcrunmb Bgein -->
                    <li>
                    <a href="index.php">الصفحة الرئيسية</a>
                    </li>
                    <li>
                        عربة التسوق
                    </li>
                </ul><!-- breadcrunmb Finish -->
                
            </div><!-- col-md-12 Finish -->
            
            <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>عربة التسوق</h1>
                       
                       <?php 
                       
                       $ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                       
                       ?>
                       
                       <p class="text-muted">لديك حاليا <?php echo $count; ?> عناصر في عربة التسوق</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">المنتج</th>
                                       <th>كمية</th>
                                       <th>سعر الوحده</th>
                                       <th>بحجم</th>
                                       <th colspan="1">حذف</th>
                                       <th colspan="2">المجموع الفرعي</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                  
                                   <?php 
                                   
                                   $total = 0;
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                       $pro_id = $row_cart['p_id'];
                                       
                                       $pro_size = $row_cart['size'];
                                       
                                       $pro_qty = $row_cart['qty'];
                                        
                                       $pro_sale = $row_cart['p_price'];
                                       
                                       $get_products = "select * from products where product_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($con,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
                                           
                                           $product_title = $row_products['product_title'];
                                           
                                           $product_img1 = $row_products['product_img1'];
                                           
                                           $only_price = $row_products['product_price'];
                                           
                                           $pro_url = $row_products['product_url'];
                                           
                                           $sub_total =  $pro_sale*$pro_qty;
                                           
                                           $_SESSION['pro_qty'] = $pro_qty;
                                           
                                           $total += $sub_total;
                                           
                                   ?>
                                   
                                   <tr>
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="<?php echo $pro_url; ?>"> <?php echo $product_title; ?> </a>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="text" name="quantity" data-product_id="<?php echo $pro_id ?>" value="<?php echo $_SESSION['pro_qty']; ?>" class="quantity form-control">
                                           
                                       </td>
                    
                                       
                                       <td>
                                           
                                           <?php echo $pro_sale; ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php echo $pro_size; ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                           
                                       </td>
                                       
                                       <td>
                                           SAR <?php echo $sub_total; ?>
                                       </td>
                                       
                                       
                                   </tr>
                                   
                                   <?php } } ?>
                                   
                               </tbody><!-- tbody Finish -->
                               
                              
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">مجموع</th>
                                       <th colspan="2">مجموع <?php echo $total; ?></th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                           <div class="form-inline pull-right"><!-- form inline pull right starts -->
                                <div class="form-group"><!-- form group starts -->
                                
                                <label>رمز الكوبون: </label>
                                
                                <input type="text" name="code" class="form-control">
                                
                                </div><!-- form group ends -->
                                
                                <input class="btn btn-primary" type="submit" name="apply_coupon" value="أستخدم الكابون">
                                </div><!-- form inline pull right ends -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="shop.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                    مواصلة التسوق  <i class="fa fa-chevron-left"></i> 
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   <i class="fa fa-chevron-right"></i>   متابعة الشراء    
                                   
                               </a>
           
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> تحديث Cart
                                   
                               </button><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->
               
               <?php

                    if(isset($_POST['apply_coupon'])){

                    $code = $_POST['code'];

                    if($code == ""){


                    }
                    else{

                    $get_coupons = "select * from coupons where coupon_code='$code'";

                    $run_coupons = mysqli_query($con,$get_coupons);

                    $check_coupons = mysqli_num_rows($run_coupons);

                    if($check_coupons == "1"){

                    $row_coupons = mysqli_fetch_array($run_coupons);

                    $coupon_pro_id = $row_coupons['product_id'];
                        
                    $coupon_price = $row_coupons['coupon_price'];   

                    $coupon_limit = $row_coupons['coupon_limit'];

                    $coupon_used = $row_coupons['coupon_used'];


                    if($coupon_limit == $coupon_used){

                    echo "<script>alert('انتهت صلاحية كود الكوبون الخاص بك')</script>";

                    }
                    else{

                    $get_cart = "select * from cart where p_id='$coupon_pro_id' AND ip_add='$ip_add'";

                    $run_cart = mysqli_query($con,$get_cart);

                    $check_cart = mysqli_num_rows($run_cart);


                    if($check_cart == "1"){

                    $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";

                    $run_used = mysqli_query($con,$add_used);

                    $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro_id' AND ip_add='$ip_add'";

                    $run_update = mysqli_query($con,$update_cart);

                    echo "<script>alert('تم تطبيق رمز القسيمة الخاص بك')</script>";

                    echo "<script>window.open('cart.php','_self')</script>";

                    }
                    else{

                    echo "<script>alert('المنتج غير موجود في العربة')</script>";

                    }

                    }

                    }
                    else{

                    echo "<script> alert('رمز الكابون الخاص بك غير صالح') </script>";

                    }

                    }


                    }


                    ?>
               
               
                <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?>
               
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
                            
                            View Details
                            
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
               
           </div><!-- col-md-9 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
               
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>ملخص الطلب</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       يتم احتساب تكاليف الشحن والتكاليف الإضافية بناءً على القيمة التي أدخلتها
                       
                   </p><!-- text-muted Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> ترتيب المجموع الفرعي </td>
                                   <th> <?php echo $total; ?> ريال</th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> الشحن والمناولة</td>
                                   <td> 0  </td>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> ضريبة </td>
                                   <th> 0</th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> مجموع </td>
                                   <th> <?php echo $total; ?> ريال </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- content Finish -->
    
    <?php
    
    include("includes/footer.php");
    
    ?>
       
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script>
	$(document).ready(function(data){
	$(document).on('keyup', '.quantity', function () {
		var id = $(this). data("product_id");
		var quantity = $(this). val();
		if (quantity != '') 
		{
			$.ajax ({
				url:"change.php",
				method:"POST",
				data:{id:id, quantity:quantity},
				success: function (data) {
					$("body").load('cart_body.php');
				}
			});
		}

	});

	});


	</script>
</body>

</html>