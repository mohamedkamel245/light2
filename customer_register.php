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
                        تسجيل
                    </li>
                </ul><!-- breadcrunmb Finish -->
                
            </div><!-- col-md-12 Finish -->
               <div class="col-md-3"><!-- col-md-3 Bgein -->
               
               
                
   
                
            </div><!-- col-md-3 Finish -->
            <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> تسجيل حساب جديد </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>الأسم كامل</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>بريدك الالكتروني</label>
                               
                               <input type="text" class="form-control" name="c_email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>كلمة مرورك</label>
                               
                               <input type="password" class="form-control" name="c_pass" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>الدولة</label>
                               <select name="c_country" class="form-control" required><!-- form-control Begin -->
                              
                                    <option> حدد دولتك </option>
                                    <option> المملكة العربية السعودية </option>
                                    <option> الكويت </option>
                                    <option> الإمارات </option>
                          
                              </select><!-- form-control Finish -->
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>مدينتك</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>رقم الجوال</label>
                               
                               <select name="c_contact" class="form-control">
                                    <option value="">مفتاح الدولة</option><option value="00966">المملكة العربية السعودية - 00966</option><option value = "00971"> الإمارات العربية المتحدة - 00971 </option> <option value = "0086"> الصين - 0086 </option> <option value = " 00213 "> الجزائر - 00213 </option> <option value =" 0020 "> مصر - 0020 </option> <option value =" 00372 "> إستونيا - 00372 </option> <option value =" 00852 "> هونج كونج - 00852 </option> <option value = "0062"> إندونيسيا - 0062 </option> <option value = "0091"> الهند - 0091 </option> <option value = "00962"> الأردن - 00962 </ option > <option value = "00254"> كينيا - 00254 </option> <option value = "00965"> الكويت - 00965 </option> <option value = "00961"> لبنان - 00961 </option> <option value = "00212"> المغرب - 00212 </option> <option value = "0060"> ماليزيا - 0060 </option> <option value = "00687 "> كاليدونيا الجديدة - 00687 </option> <option value =" 00968 "> عمان - 00968 </option> <option value =" 0063 "> الفلبين - 0063 </option> <option value = "0065"> سنغافورة - 0065 </option> <option value = "0066"> تايلاند - 0066 </option> <option value = "00216"> تونس - 00216 </ option > <option value = "0090"> تركيا - 0090 </option> <option value = "0027"> جنوب إفريقيا - 0027 </option>          
                                </select>
                               
                               <input type="text" data-rule-required="true" class="form-control" name="c_contact" placeholder="ادخل رقم الهاتف" autocomplete="off" value="" required>
                                <span class="validate-img"></span>
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label> عنوانك كامل</label>
                               
                               <input type="text" class="form-control" placeholder="اكتب العنوان ..." name="c_address" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>صورة ملفك الشخصي</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image">
                               
                           </div><!-- form-group Finish -->
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> تسجيل
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
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

<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('لقد تم تسجيلك بنجاح')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('لقد تم تسجيلك بنجاح')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>