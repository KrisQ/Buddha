<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
       
        <!-- Navigation -->
        
        <?php include "includes/navigation.php"; ?>
        
    <!-- Page Content -->
    <div class="container jimbo">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                                         
                                         
                <?php 
                
               if (isset($_GET['category'])){
                    
                    $cat_id = $_GET['category'];
                    
        }
    
     $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                    $select_Categories = mysqli_query($connection,$query);
                                
                                   while ($row = mysqli_fetch_assoc($select_Categories)) {
                    $cat_id = $row['cat_id'];  
                    $cat_title = $row['cat_title'];
                                   }
    
                
                            echo "<h1 class='page-header'> $cat_title </h1>";

            
                $query = "SELECT * FROM posts WHERE post_category_id  = $cat_id ";
                
                $selectAllPosts = mysqli_query($connection,$query);
                    
                    while ($row = mysqli_fetch_assoc($selectAllPosts)) {
                        
                          $post_id = $row['post_id'];
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = substr($row['post_content'],0,200)."...";
                        $post_status = $row['post_status'];
                        
                        if ($post_status == 'published') {
                            
            
                        ?>
                        

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title;  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo " ".$post_date;  ?></p>
                <a href="post.php?p_id=<?php echo $post_id; ?>"><img class="img-responsive" src="images/<?php echo $post_image; ?>" alt=""></a>
                <div><p><?php echo $post_content;  ?></p></div>
                <a class="btn btn-success" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                                                        <div class="hrrr"></div>


                                                
                  <?php                                        
                    } 
                    }
                  ?>

               
            </div>

            <!-- Blog Sidebar Widgets Column -->
                
                <?php include "includes/blog_sidebar.php"; ?> 

        </div>
        <!-- /.row -->

</div>        
<?php include "includes/blogfoot.php" ?>