
<?php 
  
if (isset($_POST['create_post'])){
    
    global $connection;
    
    $post_title = $_POST['title'];
    $post_category = $_POST['post_category'];
    $post_content = $_POST['post_content'];
    
    $post_title = mysqli_real_escape_string($connection,$post_title);
    $post_content = mysqli_real_escape_string($connection,$post_content);

        
    $query = "INSERT INTO menu(menu_title_id_id,menu_panel_title,menu_panel_description) ";
    $query .= "VALUES({$post_category},'{$post_title}','{$post_content}' ) ";
    
    $create_post_query = mysqli_query($connection,$query);
    
   confirm($create_post_query);
    
    echo '<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> You successfully created a new Menu Panel <a href="#" class="alert-link"></a>.
</div>';
                  
    
    
}

?>

  <form action="" method="post" enctype="multipart/form-data">
   
    <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control" name="title">
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
    <textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
    </div>
    
    <div class="form-group">
    <input type="submit" name="create_post" value="Publish" class="btn btn-lg btn-primary">
    </div>
    
</form>

