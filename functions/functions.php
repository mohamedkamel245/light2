<?php
$db =mysqli_connect("localhost","root","","ecom_store");


/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// begin add_cart functions ///

function add_cart(){
    
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = $_POST['product_qty'];
        
        $product_size = $_POST['product_size'];
        
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $get_price ="select * from products where product_id='$p_id'";
            
            $run_price = mysqli_query($db,$get_price);
            
            $row_price = mysqli_fetch_array($run_price);
            
            $pro_price = $row_price['product_price'];
            $pro_sale = $row_price['product_sale'];
            $pro_label = $row_price['product_label'];
            
            if($pro_label == "sale"){
                
                $product_price = $pro_sale;
            }else{
               
                $product_price = $pro_price;
            }

            $query = "insert into cart (p_id,ip_add,qty,p_price,size) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}

/// finish add_cart functions ///

/// finish getRealIpUser functions ///


// begin getPro functions //

function getPro(){
    global $db;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    $run_products = mysqli_query($db, $get_products);

    while($row_products=mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_url = $row_products['product_url'];
        
        $pro_price = $row_products['product_price'];
        $pro_sale_price = $row_products['product_sale'];
        
        $pro_img1 = $row_products['product_img1'];
        $pro_label = $row_products['product_label'];
        $manufacturer_id = $row_products['manufacturer_id'];
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
            <div class='col-md-4 col-sm-6 single'>
            
                <div class='product'>
                
                    <a href='$pro_url'>
                    
                    <img src='admin_area/product_images/$pro_img1'  class='img-responsive'></a>

                    <div class='text'>
                    
                        <h3>
                        
                        <a href='$pro_url'>$pro_title</a>
                        
                        </h3>
                        
                        <p class='price'>
                        
                        $product_price &nbsp;$product_sale_price 
                        
                        </p>
                        
                        <p class='buttons'>
                        
                            <a href='$pro_url' class='btn btn-default'>
                            
                            عرض التفاصيل
                            
                            </a>
                            
                            <a href='$pro_url' class='btn btn-primary'>
                            
                             أضف إلى السلة <i class='fa fa-shopping-cart'></i> 
                            
                            </a>
                        </p>
                    </div>
                    
                    $product_label

                </div>
            </div>
        ";
    }
}

// Finish getPro functions //

// begin getPCats functions //

//function getPCats(){
//    
//    global $db;
//
//    $get_p_cats = "select * from product_categories";
//    
//    $run_p_cats = mysqli_query($db,$get_p_cats);
//    
//    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
//        
//        $p_cat_id = $row_p_cats['p_cat_id'];
//        $p_cat_title = $row_p_cats['p_cat_title'];
//        
//        echo "
//            
//            <li>
//            
//                <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
//            
//            </li>
//        
//            
//        ";
//        
//    }
//    
//    
//    
//}

// Finish getPCats functions //

// getCats function starts
//    function getCats() {
//        global $db;
//        $get_cats = "select * from categories";
//        $run_cats = mysqli_query($db, $get_cats);
//        while ($row_cats = mysqli_fetch_array($run_cats)) {
//            $cat_id = $row_cats['cat_id'];
//            $cat_title = $row_cats['cat_title'];
//            echo "
//                <li><a href='shop.php?cat=$cat_id'>$cat_title</a></li>
//            ";
//        }
//    }
// getCats function Ends

/// finish getRealIpUser functions ///

function items(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $get_items = "select * from cart where ip_add='$ip_add'";
    
    $run_items = mysqli_query($db,$get_items);
    
    $count_items = mysqli_num_rows($run_items);
    
    echo $count_items;
    
}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){
    
    global $db;
    
    $ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from cart where ip_add='$ip_add'";
    
    $run_cart = mysqli_query($db,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['p_id'];
        
        $pro_qty = $record['qty'];
            
            $sub_total = $record['p_price']*$pro_qty;
            
            $total += $sub_total;
        
        
    }
    
    echo "$" . $total;
    
}

/// finish total_price functions ///

/// getProducts function Code Starts ///

function getProducts()
{
/// getProducts function Code Starts ///

global $db;

$aWhere = array();

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

}

}

}

/// Categories Code Ends ///

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}

$start_from = ($page-1) * $per_page ;

$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;

$get_products = "select * from products  ".$sWhere;

$run_products = mysqli_query($db,$get_products);

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
            <div class='col-md-4 col-sm-6 center-responsive'>
            
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
/// getProducts function Code Ends ///
}


/// getPaginator Function Code Starts ///
function getPaginator()
{


$per_page = 6;

global $db;

$aWhere = array();

$aPath = '';

/// Manufacturers Code Starts ///

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

foreach($_REQUEST['man'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'manufacturer_id='.(int)$sVal;

$aPath .= 'man[]='.(int)$sVal.'&';

}

}

}

/// Manufacturers Code Ends ///

/// Products Categories Code Starts ///

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'p_cat_id='.(int)$sVal;

$aPath .= 'p_cat[]='.(int)$sVal.'&';

}

}

}

/// Products Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from products ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<li><a href='shop.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'الصفحة الأولى'."</a></li>";

for ($i=1; $i<=$total_pages; $i++){

echo "<li><a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";

};

echo "<li><a href='shop.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'آخر صفحة'."</a></li>";

/// getPaginator Function Code Ends ///
}

?>
