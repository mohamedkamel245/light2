
   

   <div id="footer"><!-- footer Begin -->
    
    <div class="container"><!-- container Begin -->
        
        <div class="row"><!-- row Begin -->
            
            <div class="col-sm-6 col-md-3"><!--  col-sm-6 col-md-3 Begin -->
                
                <h4>صفحات</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="cart.php">عربة التسوق</a></li>
                    <li><a href="contact.php">اتصل بنا</a></li>
                    <li><a href="shop.php">متجر</a></li>
                    <li><a href="customer/my_account.php">حسابي</a></li>
                </ul><!-- ul Finish -->
                
                <br>
                
                <h4>قسم المستخدم</h4>
                
                <ul><!-- ul Begin -->
                    
                    <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>تسجيل دخول</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>حسابي</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li><a href="customer_register.php">
                            <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='customer_register.php'> تسجيل </a>";

                               }else{

                                echo " <a href='index.php'> متجرنا </a> ";

                               }
                           
                           ?>
                        </a></li>
                    <li><a href="terms.php">البنود الشروط</a></li>

                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!--  col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- com-sm-6 col-md-3 Begin -->
            
                <h4>أعلى فئات المنتجات</h4>
                
                <?php
                
                $get_p_cats = "select * from product_categories";
    
                $run_p_cats = mysqli_query($con,$get_p_cats);
    
                while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
                  $p_cat_id = $row_p_cats['p_cat_id'];
        
                  $p_cat_title = $row_p_cats['p_cat_title'];
        
                   echo "
        
                     <li>
            
                        <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
            
                     </li>
        
                    ";
        
    }
    
                
                ?>
                
                <hr class="hidden-md hidden-lg ">
                
            </div><!-- com-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- com-sm-6 col-md-3 Begin -->
                
                <h4>تجدنا</h4>
                
                <p><!-- p Gegin -->
                    
                    <strong>متجر ضوء </strong>
                    <br>Xkjhhh
                    <br>Dsdjubj
                    <br>6767-6787-9789
                    <br>ghgfg45@gmail.com
                    <br><strong>MrGhie</strong>
                </p><!-- p Finish -->
                
                <a href="contact.php">تحقق من صفحة الاتصال بنا</a>
                
                <hr class="hidden-md hidden-lg ">
                
            </div><!-- com-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-3"><!-- com-sm-6 col-md-3 Begin -->
                
                <h4>الحصول على الأخبار</h4>
                
                <p class="text-muted"> 
                    لا تفوت أحدث منتجات الحديثه.
                </p>
                
                <form action="get" method="post"><!-- form Begin -->
                    
                    <div class="input-group"><!-- input-group Begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <span class="input-group-btn"><!-- input-group-btn Begin -->
                            
                            
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                    
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>أبق على اتصال</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div><!-- com-sm-6 col-md-3 Finish -->
            
        </div><!-- row Finish -->
        
    </div><!-- container Finish -->
    
</div><!-- footer Finish -->

<!--=====================الجزء الثاني-->

<div id="copyright"><!-- #copyright Bgein -->

    <div class="container"><!-- container Bgein -->
        
        <div class="col-md-6"><!-- col-md-6 Bgein -->
            
            <p class="pull-lrft">&copy; 2020 متجر ضوء </p>
            
        </div><!-- col-md-6 Finish -->
        
        <div class="col-md-6"><!-- col-md-6 Bgein -->
            
            <p class="pull-right">hemf by: <a href="#">متجر ضوء</a></p>
            
        </div><!-- col-md-6 Finish -->
        
    </div><!-- container Finish -->
    
</div><!-- #copyright Finish -->
