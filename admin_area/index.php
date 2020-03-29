<?php 
     session_start(); 
     if(!isset($_SESSION['admin_email'])){
        echo "<script>window.location.href='login.php'</script>";
     }
     else {
    require_once('inc/top.php'); ?>
    <?php

    $admin_session=$_SESSION['admin_email'];
    $get_admin="select * from admins where admin_email='$admin_session'";
    $run_admin=mysqli_query($con,$get_admin);
    $row_admin=mysqli_fetch_array($run_admin);
    $admin_id=$row_admin['admin_id'];
    $admin_name=$row_admin['admin_name'];
    $admin_email=$row_admin['admin_email'];
    $admin_email=$row_admin['admin_contact'];
    $admin_job=$row_admin['admin_job'];
    $admin_image=$row_admin['admin_image'];
    


    


 ?>
<body>
   
    <div id="wrapper"><!-- #wrapper begin -->
        <?php require_once('inc/sidebar.php'); ?>
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                  <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");

                        
                }
                 if(isset($_GET['insert_products'])){
                        
                        include("insert_products.php");
                    }
                    if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                    }
                    if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                    
                }
                  if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                    }  
                    // if(isset($_GET['insert_p_cat'])){
                        
                    //     include("insert_p_cat.php");
                    // }   
                    // if(isset($_GET['view_p_cats'])){
                        
                    //     include("view_p_cats.php");
                    // }            
                    //  if(isset($_GET['edit_p_cat'])){
                        
                    //     include("edit_p_cat.php");
                    // }                      
                    //  if(isset($_GET['delete_p_cat'])){
                        
                    //     include("delete_p_cat.php");
                    // }            

                    // if(isset($_GET['insert_cat'])){
                        
                    //     include("insert_cat.php");
                    // }      

                    // if(isset($_GET['view_cats'])){
                        
                    //     include("view_cats.php");
                    // }      

                    // if(isset($_GET['edit_cat'])){
                        
                    //     include("edit_cat.php");
                    // }      

                    //  if(isset($_GET['delete_cat'])){
                        
                    //     include("delete_cat.php");
                    // }        

                    if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                    }

                     if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                    }         

                     if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                    }         

                     if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                    }         
 
                    // if(isset($_GET['view_customers'])){
                        
                    //     include("view_customers.php");
                    // }         

                    // if(isset($_GET['delete_customer'])){
                        
                    //     include("delete_customer.php");
                    // }   

                    //  if(isset($_GET['view_orders'])){
                        
                    //     include("view_orders.php");
                    // }          

                    //  if(isset($_GET['delete_order'])){
                        
                    //     include("delete_order.php");
                    // }  

                   

                     if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                    }    

                     if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                    }    

                     if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                    }             

                     if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                    }             
                                
                    // if(isset($_GET['insert_ad'])){
                        
                    //     include("insert_ad.php");
                    // }             

                    //  if(isset($_GET['view_ad'])){
                        
                    //     include("view_ad.php");
                    // }             

                    //  if(isset($_GET['delete_ad'])){
                        
                    //     include("delete_ad.php");
                    // }             

                    

               
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>