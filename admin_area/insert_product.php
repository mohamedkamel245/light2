<?php

 if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
    }else{

?>

        
        <div class="row"><!-- row Begin-->
            
            <div class="col-lg-12"><!-- col-lg-12 Begin-->
               
               <ol class="breadcrumb"><!-- breadcrumb Begin-->
                   
                   <li class="active"><!-- active Begin-->
                       
                       <i class="fa fa-dashboard"></i> لوحة التحكم / اضافة المنتجات
                       
                   </li><!-- active Finish-->
                   
               </ol><!-- breadcrumb Finish-->
                
            </div><!-- col-lg-12 Finish-->
            
        </div><!-- row Finish -->
        
        
        <div class="row"><!-- row Begin-->
           
           <div class="col-lg-12"><!-- col-lg-12 Begin-->
           
           <div class="panel panel-default"><!-- panel panel-default Begin-->
               
               <div class="panel-heading"><!-- panel-heading Begin-->
                  
                  <h3 class="panel-title"><!-- panel-title Begin-->
                      
                      <i class="fa fa-money fa-fw"></i> أدخل المنتج
                      
                  </h3><!-- panel-title Finish-->
                   
               </div><!-- panel-heading Finish-->
               
               <div class="panel-body"><!-- panel-body Begin-->
                  
                  <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_title" type="text" class="form-control" required>
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> عنوان المنتج </label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                       
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_url" type="text" class="form-control">
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> رابط المنتج استخدام داش '_' للرابط  </label>
                        
                        
                         
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                       
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <select name="manufacturer" class="form-control"><!-- form-control Begin-->
                               
                               <option> اManufacturer</option>
                               
                               <?php
                               
                               $get_Manufacturer = "select * from manufacturers";
                               $run_Manufacturer = mysqli_query($con,$get_Manufacturer);
                               
                               while($row_Manufacturer=mysqli_fetch_array($run_Manufacturer)){
                                   
                                   $manufacturer_id = $row_Manufacturer['manufacturer_id'];
                                   $manufacturer_title = $row_Manufacturer['manufacturer_title'];
                                   
                                   echo"
                                   
                                   <option value='$manufacturer_title'> $manufacturer_title </option>
                                   
                                   ";
                                   
                               }
                               ?>
                               
                            </select><!-- form-control Finish-->
                            
                        </div><!-- col-md-6 Finish-->
                        
                         <label class="col-md-3 control-label"> Manufacturer </label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                       
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <select name="product_cat" class="form-control"><!-- form-control Begin-->
                               
                               <option> اختر منتج الفئة </option>
                               
                               <?php
                               
                               $get_p_cats = "select * from product_categories";
                               $run_p_cats = mysqli_query($con,$get_p_cats);
                               
                               while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                   
                                   $p_cat_id = $row_p_cats['p_cat_id'];
                                   $p_cat_title = $row_p_cats['p_cat_title'];
                                   
                                   echo"
                                   
                                   <option value='$p_cat_id'> $p_cat_title </option>
                                   
                                   ";
                                   
                               }
                               ?>
                               
                            </select><!-- form-control Finish-->
                            
                        </div><!-- col-md-6 Finish-->
                        
                         <label class="col-md-3 control-label"> عنوان المنتج </label>
                         
                     </div><!-- form-group Finish-->
                     
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <select name="cat" class="form-control"><!-- form-control Begin-->
                               
                               <option> اختر تصنيف </option>
                               
                               <?php
                               
                               $get_cat = "select * from categories";
                               $run_cat = mysqli_query($con,$get_cat);
                               
                               while($row_cat=mysqli_fetch_array($run_cat)){
                                   
                                   $cat_id = $row_cat['cat_id'];
                                   $cat_title = $row_cat['cat_title'];
                                   
                                   echo"
                                   
                                   <option value='$cat_id'> $cat_title </option>
                                   
                                   ";
                                   
                               }
                               ?>
                               
                            </select><!-- form-control Finish-->
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> الفئة </label>
                         
                     </div><!-- form-group Finish-->
                     
                     
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_img1" type="file" class="form-control" required>
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> صورة المنتج 1</label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_img2" type="file" class="form-control">
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> صورة المنتج 2
                        </label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_img3" type="file" class="form-control">
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> صورة المنتج 3 </label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                       
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_price" type="text" class="form-control" required>
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> سعر المنتج
                        </label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                       
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_sale" type="text" class="form-control">
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> تخفيض السعر
                        </label>
                         
                     </div><!-- form-group Finish-->
                     
                     <div class="form-group"><!-- form-group Begin-->
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <input name="product_keywords" type="text" class="form-control" required>
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> كلمات المنتج </label>
                         
                     </div><!-- form-group Finish-->
                      <div class="form-group"><!-- form-group Begin-->
                       
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                          
                          <select name="product_label">
                              
                              <option selected disabled >إختيار نوع الملصقه</option>
                              
                              <option value="new">جديد</option>
                              
                              <option value="sale">تخفيض</option>
                              
                          </select>
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> ملصق المنتج
                        </label>
                         
                     </div><!-- form-group Finish-->
                     
                      <div class="form-group"><!-- form-group Begin-->
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                           <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                            
                        </div><!-- col-md-6 Finish-->
                        
                        <label class="col-md-3 control-label"> وصف المنتج </label>
                        
                         
                     </div><!-- form-group Finish-->
                      
                       <div class="form-group"><!-- form-group Begin-->
                        
                        <label class="col-md-3 control-label"></label>
                        
                        <div class="col-md-6"><!-- col-md-6 Begin-->
                           
                          <input name="submit" value="أدخل المنتج" type="submit" class="btn btn-primary form-control">
                            
                        </div><!-- col-md-6 Finish-->
                         
                     </div><!-- form-group Finish-->
                      
                  </form><!-- form-horizontal Finish--> 
                   
               </div><!-- panel-body Finish-->
               
           </div><!-- panel panel-default Finish-->
           
           </div><!-- breadcrumb Finish-->
            
        </div><!-- row Finish -->


<?php

if(isset($_POST['submit'])){
    
     $product_title = $_POST['product_title'];
     $product_url = $_POST['product_url'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $manufacturer_id = $_POST['manufacturer'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    $product_sale = $_POST['product_sale'];
    $product_label = $_POST['product_label'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,manufacturer_id,date,product_title,product_url,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc,product_label,product_sale) values ('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc','$product_label','$product_sale')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('تم إدراج المنتج بنجاح')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
    
}

?>

<?php } ?>