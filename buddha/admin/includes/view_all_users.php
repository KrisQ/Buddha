
                           <div class="form-group">

                    <button class="btn btn-success"> <a style="color:white" href="users.php?source=add_user">Add New User</a></button>

                           </div>

                           <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               <?php 
                                    
                                     
 $query = "SELECT * FROM users";
                    $select_users = mysqli_query($connection,$query);
                                
                while ($row = mysqli_fetch_assoc($select_users)) {
                    $user_id = $row['user_id'];
                    $username = $row['username'];  
                    $user_password = $row['user_password'];
                    $user_firstname = $row['user_firstname'];
                    $user_lastname = $row['user_lastname'];
                    $user_email = $row['user_email'];
                    $user_image = $row['user_image'];  
                    $user_role = $row['user_role'];


                                       

echo '<tr>';    
                                       
echo "<td>{$user_id}</td>";
echo "<td>{$username}</td>";
echo "<td>{$user_firstname}</td>";
   
//$query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
//$select_Categories_id = mysqli_query($connection,$query);
//                                
//while ($row = mysqli_fetch_assoc($select_Categories_id)) {
//$cat_id = $row['cat_id'];  
//$cat_title = $row['cat_title'];
//}
//                                       
//echo "<td>{$cat_title}</td>";
                                       
                                       
echo "<td>{$user_lastname}</td>";
echo "<td>{$user_email}</td>";
echo "<td>{$user_role}</td>";

          
                    
//$query = "SELECT * FROM posts WHERE post_id = {$comment_post_id} ";
//$select_post_id_query = mysqli_query($connection,$query);
//                                
//while ($row = mysqli_fetch_assoc($select_post_id_query)) {
//$post_id = $row['post_id'];
//$post_title = $row['post_title'];
//    echo "<td><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";          
//
//}

                                       
                                   
                                       
                                       
                                       
echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
                                
echo "</tr>";

                        
                    }
                                
    
                                ?>
                               
                            </tbody>
                            
                        </table>
                        
                                                   <div class="form-group">

                                <button class="btn btn-success"> <a style="color:white" href="users.php?source=add_user">Add New User</a></button>


                           </div>
                        
<?php





if(isset($_GET['delete'])){
    

     $user_id = $_GET['delete'];
    
    $query = "DELETE FROM users WHERE user_id =  {$user_id} ";
    $delete_query = mysqli_query($connection,$query);
    header("location: users.php");
    
}


?>