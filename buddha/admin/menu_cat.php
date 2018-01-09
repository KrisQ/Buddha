<?php include "includes/admin_header.php";  ?>
<?php include "functions.php"; ?>
<?php ob_start(); ?>

    <div id="wrapper">

        <!-- Navigation -->
     <?php include "includes/admin_navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                        
                        <div class="col-xs-6">
                     
                        
                        <?php insert_menu_categories(); ?>
                        
                        
                        <form action="" method="post">
                            <div class="form-group">
                               <label for="menu_title">Add Menu Title</label>
                                <input type="text" name="menu_title" class="form-control">
                            </div>
                            
                             <div class="form-group">
                                <input type="submit" name="submit" value="Add Title" class="btn btn-primary">
                            </div>
                            
                        </form>
                            <?php // UPDATE AND INCLUDE QUERY
                                if(isset($_GET['edit'])){
                                    $cat_id = $_GET['edit'];
                                    include "includes/edit_menu_cat.php";
                                }
                            ?>
                        
                        </div>
                        
                        <div class="col-xs-6">
                        
                        
                         <table class="table table-bordered table-hover">
                             <thead>
                                 <tr>
                                     <th>Id</th>
                                     <th>Title</th>
                                 </tr>
                             </thead>
                             <tbody>
                                
                                    <?php // FIND ALL CATEGORIES QUERY
                                            find_all_menu_categories();?>
                                
                                <?php // DELETE QUERY
                                 delete_menu_categories();
                                 ?>
                                 

                             </tbody>
                         </table>
                          
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php"; ?>