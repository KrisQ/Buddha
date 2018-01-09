 <form action="" method="post">
                            <div class="form-group">
                               <label for="cat_title">Edit Category</label>
                               
                               <?php 
                                
                                if(isset($_GET['edit'])) {
                                    
                                 $cat_id = $_GET['edit'];
                                
                                 $query = "SELECT * FROM mentit WHERE menu_title_id = $cat_id ";
                                 $select_Categories_id = mysqli_query($connection,$query);
                                
                                 while ($row = mysqli_fetch_assoc($select_Categories_id)) {
                                 $cat_id = $row['menu_title_id'];  
                                 $cat_title = $row['menu_title'];
                                 
                                 ?>
                                 <input value="<?php if (isset($cat_title)) {echo $cat_title;} ?>" type="text" name="menu_title" class="form-control">
                                 <?php
                                 }
                                }
                                ?>
                                
                                <?php 
                                //UPDATE QUERY
                                    
                                     if(isset($_POST['update_menu_cat'])) {
                                     
                                     $the_cat_title = $_POST['menu_title'];
                                         $the_cat_title = mysqli_real_escape_string($connection,$the_cat_title);
                                     
                                     $query = "UPDATE mentit SET menu_title = '{$the_cat_title}' WHERE menu_title_id = {$cat_id} ";
                                     $update_query = mysqli_query($connection,$query);
                                         
                                         if (!$update_query) {
                                             die('QUERY FAILED'.mysqli_error($connection));
                                         } else { 
                                             echo '<br><div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> You successfully updated a Title <a href="#" class="alert-link"></a>.
</div>';
                                         }
                                         
                                 }
                                
                                
                                ?>
                                
                                
                            </div>
                            
                             <div class="form-group">
                                <input type="submit" name="update_menu_cat" value="Update" class="btn btn-primary">
                            </div>
                            
                        </form>