
<?php

                 if (isset($_GET['p_id'])){   
                     
                     
                     $the_post_id = $_GET['p_id'];

                 
                     
                    $query = "SELECT * FROM menu WHERE menu_id = {$the_post_id} ";
                    $select_posts_by_id = mysqli_query($connection,$query);
                                
                                   while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
                    $post_id = $row['menu_id'];  
                    $post_title = $row['menu_panel_title'];
                    $post_category_id = $row['menu_title_id_id'];
                    $post_content = $row['menu_panel_description']; 

                                   }}

if (isset($_POST['edit_post'])) {
    
    $post_title = $_POST['title'];
    $post_category_id = $_POST['post_category'];
    $post_content = $_POST['post_content'];
    
     $post_title = mysqli_real_escape_string($connection,$post_title);
    
    $post_content = mysqli_real_escape_string($connection,$post_content);
    
    
    
    $query = "UPDATE menu SET ";
    $query .= "menu_panel_title ='{$post_title}', ";
    $query .= "menu_title_id_id ='{$post_category_id}', ";
    $query .= "menu_panel_description ='{$post_content}' ";
    $query .= "WHERE menu_id ='{$the_post_id}' ";
    
 

    
    $update_post = mysqli_query($connection,$query);
    confirm($update_post);
    
    echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> You successfully edited your Menu Panel <a href="#" class="alert-link"></a>.
</div>';
    
    
}

?>
 
 
 
  <form action="" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $post_title ?>">
    </div>
    
    <div class="form-group">
    <select name="post_category" id="">
        <?php 
            $query = "SELECT * FROM mentit";
            $select_Categories = mysqli_query($connection,$query);
           
            confirm($select_Categories);
                                
            while ($row = mysqli_fetch_assoc($select_Categories)) {
            $cat_id = $row['menu_title_id'];  
            $cat_title = $row['menu_title'];
                
                echo "<option value='$cat_id'>$cat_title</option>";
                
            }
        ?>
    </select>
    </div>
    
    
    <div class="form-group">
    <label for="post_content">Post Content</label>
    <textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content ?></textarea>
    </div>
    
    <div class="form-group">
    <input type="submit" name="edit_post" value="Publish" class="btn btn-lg btn-primary">
    </div>
    
</form>
