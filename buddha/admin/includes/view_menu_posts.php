
                           <div class="form-group ">
                               

                               <button class="btn btn-success"> <a style="color:white" href="menu_posts.php?source=add_menu_post">Add Menu Item</a></button>

                           </div>

                           <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Category</th>                                   
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                               <?php 
                                    
                                     
 $query = "SELECT * FROM menu";
                    $select_posts = mysqli_query($connection,$query);
                                
                                   while ($row = mysqli_fetch_assoc($select_posts)) {
                    $post_id = $row['menu_id'];  
                    $post_title = $row['menu_panel_title'];
                    $post_category_id = $row['menu_title_id_id'];
                                       

echo '<tr>';    
                                       
echo "<td>{$post_id}</td>";
echo "<td>{$post_title}</td>";
   
$query = "SELECT * FROM mentit WHERE menu_title_id = {$post_category_id} ";
$select_Categories_id = mysqli_query($connection,$query);
                                
while ($row = mysqli_fetch_assoc($select_Categories_id)) {
$cat_id = $row['menu_title_id'];  
$cat_title = $row['menu_title'];
}
                                       
echo "<td>{$cat_title}</td>";
                                       
                                       
echo "<td><a href='menu_posts.php?source=edit_menu_post&p_id={$post_id}'>Edit</a></td>";
echo "<td><a href='menu_posts.php?delete=$post_id'>Delete</a></td>";
                                
echo "</tr>";

                        
                    }
                                
    
                                ?>
                               
                            </tbody>
                            
                        </table>
                        
                        <div class="form-group">

                                <button class="btn btn-success"> <a style="color:white" href="menu_posts.php?source=add_menu_post">Add Menu Item</a></button>

                           </div>
                        
<?php 

if(isset($_GET['delete'])){
    

    $the_post_id = $_GET['delete'];
    
    $query = "DELETE FROM menu WHERE menu_id =  {$the_post_id} ";
    $delete_query = mysqli_query($connection,$query);
    header("location: menu_posts.php");
    
}


?>