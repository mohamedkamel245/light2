<?php
    $active='Contact';
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
                        اتصل بنا
                    </li>
                </ul><!-- breadcrunmb Finish -->
                
            </div><!-- col-md-12 Finish -->
            
            <div class="col-md-3"><!-- col-md-3 Bgein -->
               
               
                
    
                
            </div><!-- col-md-3 Finish -->
            
            <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> لا تتردد في الاتصال</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               إذا كان لديك أي أسئلة ، فلا تتردد في الاتصال بنا. عمل خدمة العملاء لدينا<strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       
                       <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>الاسم</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>البريد الإلكتروني</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>موضوع</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>رسالة</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> إرسال الرسالة 
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                       <?php 
                       
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $sender_name = $_POST['name'];
                           
                           $sender_email = $_POST['email'];
                           
                           $sender_subject = $_POST['subject'];
                           
                           $sender_message = $_POST['message'];
                           
                           $receiver_email = "aldaw.company245@gmail.com";
                           
                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                           
                           /// Auto reply to sender with this ///
                           
                           $email = $_POST['email'];
                           
                           $subject = "Welcome to my website";
                           
                           $msg = "Thanks for sending us message. ASAP we will reply your message";
                           
                           $from = "aldaw.company245@gmail.com";
                           
                           mail($email,$subject,$msg,$from);
                           
                           echo "<h2 align='center'> لقد أرسلت رسالتك بنجاح </h2>";
                           
                       }
                       
                       ?>
                       
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