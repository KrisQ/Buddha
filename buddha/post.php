<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
       
        <!-- Navigation -->
        
        <?php include "includes/navigation.php"; ?>
        
    <!-- Page Content -->
    <div class="container jimbo">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
<!--
                                         <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
-->
                <?php 
                
                if (isset($_GET['p_id'])) {
                    
                    $post_id = $_GET['p_id'];
                     
                }
            
                $query = "SELECT * FROM posts WHERE post_id = $post_id ";
                
                $selectAllPosts = mysqli_query($connection,$query);
                    
                    while ($row = mysqli_fetch_assoc($selectAllPosts)) {
                        
                        $post_title = $row['post_title'];
                        $post_author = $row['post_author'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image'];
                        $post_content = $row['post_content'];
                        ?>
                        

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title;  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo " ".$post_date;  ?></p>
                <div class="woop">  
                    <img id="im" class="img-responsive"  src="images/<?php echo $post_image; ?>" alt="">
                </div>
                <p><?php echo $post_content;  ?></p>
<!--                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->

                                                
                  <?php                                        
                    } 
                  ?>
                  
                  
                <!-- Blog Comments -->
                
                <?php 
                
//                if (isset($_POST['create_comment'])) {
//                 
//                    $post_id = $_GET['p_id'];
//                    $comment_author = $_POST['comment_author'];
//                    $comment_email = $_POST['comment_email'];
//                    $comment_content = $_POST['comment_content'];
//                    
//                    $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
//                     $query .= "VALUES ($post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unaproved', now())";
//                    
//                    $create_comment_query = mysqli_query($connection,$query);
//                    
//                        if (!$create_comment_query) {
//                            die('QUERY FAILED' . mysli_error($connection));
//                        }
//                    
//                    $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
//                    $query .= "WHERE post_id = $post_id ";
//                    $update_comment_count = mysqli_query($connection,$query);
//                    
//                }
                
                ?>

                <!-- Comments Form -->
<!--
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="post">
                       
                        <div class="form-group">
                            <label for="comment_author">Author</label>
                            <input type="text" class="form-control" name="comment_author">
                        </div>
                        <div class="form-group">
                            <label for="comment_email">e-Mail</label>
                            <input type="email" class="form-control" name="comment_email">
                        </div>
                       
                        <div class="form-group">
                            <label for="comment_content">Your Comment</label>
                            <textarea class="form-control" rows="3" name="comment_content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>
-->

<!--                <hr>-->

                <!-- Posted Comments -->
                <?php
//                $query = "SELECT * FROM comments WHERE comment_post_id = $post_id ";
//                $query .= "AND comment_status = 'approved' ";
//                $query .= "ORDER BY comment_id DESC ";
//                $select_comment_query = mysqli_query($connection,$query);
//                if (!$select_comment_query) {
//                    die('QUERY FAILED' . mysqli_error($connection));
//                }
//                while ($row = mysqli_fetch_assoc($select_comment_query)) {
//                    $comment_date = $row['comment_date'];
//                    $comment_author = $row['comment_author'];
//                    $comment_content = $row['comment_content'];
                ?>
                
<!--
                 <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php  ?>
                            <small><?php ?></small>
                        </h4>
                        <?php  ?>
                    </div>
                </div>
                
-->
                <?php
//                }
                ?>

                <!-- Comment -->
                
                
                
                
               

            
            
             
            </div>

            <!-- Blog Sidebar Widgets Column -->
                
                <?php include "includes/blog_sidebar.php"; ?> 

        </div>
        <!-- /.row -->
        
        

</div>    


<?php include "includes/blogfoot.php"; ?>