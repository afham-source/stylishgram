<?php 
  
     if(!isset($_SESSION['admin_email'])){
        echo "<script>window.location.href='login.php'</script>";
     }
     else {?>
<div class="row"><!-- row no: 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <h1 class="page-header"> Dashboard </h1>
        
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
            
                <i class="fa fa-dashboard"></i> Dashboard
            
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
        
    </div><!-- col-lg-12 finish -->
</div><!-- row no: 1 finish -->

<div class="row"><!-- row no: 2 begin -->
   
<div class="panel-body"><!-- panel-body begin -->
            
            <?php 
            
                $get_slides = "select * from main";
    
                $run_slides = mysqli_query($con,$get_slides);
    
                while($row_slides=mysqli_fetch_array($run_slides)){
                    
                    $slide_id = $row_slides['id'];
                    
                    $slide_name = "Main Crystal Image";
                    
                    $slide_image = $row_slides['crystal_img'];
            
            ?>
            
            <div class="col-lg-3 col-md-3"><!-- col-lg-3 col-md-3 begin -->
                <div class="panel panel-primary"><!-- panel panel-primary begin -->
                    <div class="panel-heading"><!-- panel-heading begin -->
                        <h3 class="panel-title" align="center"><!-- panel-title begin -->
                        
                            <?php echo $slide_name; ?>
                            
                        </h3><!-- panel-title finish -->
                    </div><!-- panel-heading finish -->
                    
                    <div class="panel-body"><!-- panel-body begin -->
                        
                        <img src="../Images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>" class="img-responsive">
                        
                    </div><!-- panel-body finish -->
                    
                    <div class="panel-footer"><!-- panel-footer begin -->
                        <center><!-- center begin -->
                            
                            <a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-right"><!-- pull-right begin -->
                            
                             <i class="fa fa-trash"></i> Delete
                            
                            </a><!-- pull-right finish -->
                            
                            <a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-left"><!-- pull-left begin -->
                            
                             <i class="fa fa-pencil"></i> Edit
                            
                            </a><!-- pull-left finish -->
                            
                            <div class="clearfix"></div>
                            
                        </center><!-- center finish -->
                    </div><!-- panel-footer finish -->
                    
                </div><!-- panel panel-primary finish -->
            </div><!-- col-lg-3 col-md-3 finish -->
            
            <?php } ?>
        
        </div><!-- panel-body finish -->
    
</div><!-- row no: 2 finish -->

<div class="row"><!-- row no: 3 begin -->
    <div class="col-lg-8"><!-- col-lg-8 begin -->
        <div class="panel panel-primary"><!-- panel panel-primary begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                    
                    <i class="fa fa-money fa-fw"></i> Total Designs
                    
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                          
                        <tr><!-- tr begin -->
                                <th> Crystal ID: </th>
                                <th> Crystal Name: </th>
                                <th> Crystal Image: </th>
                                <th> Base Image: </th>
                                <th>  Delete: </th>
                                <th>  Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from design";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['id'];
                                    
                                    $c_name = $row_pro['c_name'];
                                    
                                    $c_img = $row_pro['c_img'];
                                    
                                    $b_img = $row_pro['b_img'];
                                    
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_name; ?> </td>
                                <td> <img src="../Images/<?php echo $c_img; ?>" width="60" height="60"></td>
                                <td> <img src="../Images/<?php echo $b_img; ?>" width="60" height="60"></td>                                
                                
                                <td> 
                                     
                                     <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                           <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
                
                <div class="text-right"><!-- text-right begin -->
                    
                    <a href="index.php?view_products"><!-- a href begin -->
                        
                        View All  <i class="fa fa-arrow-circle-right"></i>
                        
                    </a><!-- a href finish -->
                    
                </div><!-- text-right finish -->
                
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-primary finish -->
    </div><!-- col-lg-8 finish -->
    
   
    
</div><!-- row no: 3 finish -->
<?php } ?>