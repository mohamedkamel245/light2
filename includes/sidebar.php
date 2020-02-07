<?php 

$aMan = array();
$aCat = array();
$aPcat = array();

// This is for manufacturers Begin //

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

    foreach($_REQUEST['man'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aMan[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for manufacturers Finisih //

// This is for categories Begin //

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

    foreach($_REQUEST['cat'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aCat[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for categories Finisih //

// This is for products_categories Begin //

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

    foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aPcat[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for products_categories Finisih //

?>
    
<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading"><!-- panel-heading Begin -->
        
        <h3 class="panel-title">
        منتجات ضوء 
        
        <div class="pull-right"><!-- pull-right Starts -->

            <a href="JavaScript:Void(0);" style="color:black;">

            <span class="nav-toggle hide-show">

            إخفاء

            </span>

            </a>

         </div><!-- pull-right Ends -->
        
        </h3>
        
    </div><!-- panel-heading Finish -->
    
    <div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data starts -->

        <div class="panel-body"><!-- panel-body Starts -->

        <div class="input-group"><!-- input-group Starts -->
        
        <a class="input-group-addon"> <i class="fa fa-search"></i> </a>

        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p_cat" placeholder="تصفية فئات المنتجات">
        

        </div><!-- input-group Ends -->

        </div><!-- panel-body Ends -->

        <div class="panel-body" ><!-- panel-body scroll-menu Starts -->

        <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cat"><!-- nav nav-pills nav-stacked category-menu Starts -->

        <?php

        $get_p_cat = "select * from product_categories where p_cat_top='yes'";

        $run_p_cat = mysqli_query($con,$get_p_cat);

        while($row_p_cat = mysqli_fetch_array($run_p_cat)){

        $p_cat_id = $row_p_cat['p_cat_id'];

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_image = $row_p_cat['p_cat_image'];

        if($p_cat_image == ""){

        }
        else{

        $p_cat_image = "
        <img src='admin_area/other_images/$p_cat_image' width='20px' >&nbsp;
        ";

        }

        echo "
        <li style='background:#dddddd;' class='checkbox checkbox-primary'>
        <a>
        <label>
        <input ";

        if(isset($aMan[$p_cat_id])){ echo "checked='checked'"; }

        echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat'>
        <span>
        $p_cat_image
        $p_cat_title
        </span>
        </label>
        </a>
        </li>
        ";


        }


        $get_p_cat = "select * from product_categories where p_cat_top='no'";

        $run_p_cat = mysqli_query($con,$get_p_cat);

        while($row_p_cat = mysqli_fetch_array($run_p_cat)){

        $p_cat_id = $row_p_cat['p_cat_id'];

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_image = $row_p_cat['p_cat_image'];

        if($p_cat_image == ""){


        }
        else{

        $p_cat_image = "
        <img src='admin_area/other_images/$p_cat_image' width='20px'> &nbsp;
        ";

        }

        echo "
        <li class='checkbox checkbox-primary'>
        <a>
        <label>
        <input ";

        if(isset($aMan[$p_cat_id])){ echo "checked='checked'"; }

        echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat'>
        <span>
        $p_cat_image
        $p_cat_title
        </span>
        </label>
        </a>
        </li>
        ";

        }

        ?>

        </ul><!-- nav nav-pills nav-stacked category-menu Ends -->

        </div><!-- panel-body scroll-menu Ends -->

        </div><!-- panel-collapse collapse-data Ends -->

    
</div><!-- panel panel-default sidebar-menu Finish -->

   
   
   
<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading"><!-- panel-heading Begin -->
        
        <h3 class="panel-title">
        تصنيفات التجميل
        
        <div class="pull-right"><!-- pull-right Starts -->

            <a href="JavaScript:Void(0);" style="color:black;">

            <span class="nav-toggle hide-show">

            إخفاء

            </span>

            </a>

         </div><!-- pull-right Ends -->
        
        </h3>
        
    </div><!-- panel-heading Finish -->
    
    <div class="panel-collapse collapse-data"><!-- panel-collapse collapse-data starts -->

        <div class="panel-body"><!-- panel-body Starts -->

        <div class="input-group"><!-- input-group Starts -->
        
        <a class="input-group-addon"> <i class="fa fa-search"></i> </a>

        <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-cat" placeholder="تصفية الفئات">
        

        </div><!-- input-group Ends -->

        </div><!-- panel-body Ends -->

        <div class="panel-body" ><!-- panel-body scroll-menu Starts -->

        <ul class="nav nav-pills nav-stacked category-menu" id="dev-category"><!-- nav nav-pills nav-stacked category-menu Starts -->

        <?php

        $get_category = "select * from categories where cat_top='yes'";

        $run_category = mysqli_query($con,$get_category);

        while($row_category = mysqli_fetch_array($run_category)){

        $cat_id = $row_category['cat_id'];

        $cat_title = $row_category['cat_title'];

        $cat_image = $row_category['cat_image'];

        if($cat_image == ""){

        }
        else{

        $cat_image = "
        <img src='admin_area/other_images/$cat_image' width='20px' >&nbsp;
        ";

        }

        echo "
        <li style='background:#dddddd;' class='checkbox checkbox-primary'>
        <a>
        <label>
        <input ";

        if(isset($aMan[$cat_id])){ echo "checked='checked'"; }

        echo " type='checkbox' value='$cat_id' name='cat' class='get_cat'>
        <span>
        $cat_image
        $cat_title
        </span>
        </label>
        </a>
        </li>
        ";


        }


        $get_cat = "select * from categories where cat_top='no'";

        $run_cat = mysqli_query($con,$get_cat);

        while($row_cat = mysqli_fetch_array($run_cat)){

        $cat_id = $row_cat['cat_id'];

        $cat_title = $row_cat['cat_title'];

        $cat_image = $row_cat['cat_image'];

        if($cat_image == ""){


        }
        else{

        $cat_image = "
        <img src='admin_area/other_images/$cat_image' width='20px'> &nbsp;
        ";

        }

        echo "
        <li class='checkbox checkbox-primary'>
        <a>
        <label>
        <input ";

        if(isset($aMan[$cat_id])){ echo "checked='checked'"; }

        echo " type='checkbox' value='$cat_id' name='cat' class='get_cat'>
        <span>
        $cat_image
        $cat_title
        </span>
        </label>
        </a>
        </li>
        ";

        }

        ?>

        </ul><!-- nav nav-pills nav-stacked category-menu Ends -->

        </div><!-- panel-body scroll-menu Ends -->

        </div><!-- panel-collapse collapse-data Ends -->

    
</div><!-- panel panel-default sidebar-menu Finish -->
    


