<?php include "includes/db.php"; ?>

<?php

if (isset($_POST['submit'])) {

			
			
	 	 if (!$_POST['name']) {

			 $error="<br />Veuillez nous procurer un nom de réservation s'il vous plait";

	 	 }
			
	 	 if (!$_POST['phone']) {

			 $error.="<br />Veuillez nous procurer un numéro de téléphone s'il vous plait";

	 	 }
	 	 
	 	  if (!$_POST['nombre']) {

			 $error.="<br />Veuillez nous procurer un nombre de client pour la réservation s'il vous plait";

	 	 }
	 	 
	 	 
	 	 
	 	 
	 	 
	 	 
	 	 if ($error) {

 $result='<div class="alert alert-danger"><strong>Il y a un problème avec votre réservation:</strong>'.$error.'</div>';

	 	 } else {

 if (mail("direction.buddha@bbox.fr", "Reservation!", "Nom: ".
$_POST['name']."

 Téléphone: ".$_POST['phone']."
 
 Nombre de clients: ".$_POST['nombre']."
 
 Date: ".$_POST['date']."
  
 Heure: ".$_POST['sel4']
 
 
 )) {

 $result='<div class="alert alert-success"><strong>Merci beaucoup !</strong><br>Notre directeur vous enverra un SMS pour confirmer votre réservation</div>';

 } else {

 $result='<div class="alert alert-danger">Sorry, there was
an error sending your message. Please try again later.</div>';

 }

 
         }
 

}
 

 ?>
 
 

 <?php include "includes/header.php" ?>
    
 
   <?php include "includes/navigation.php" ?>
    

<?php include "includes/pagetop.php"
 ?>
 

<?php include "includes/nous.php" ?>





<?php include "includes/midrow.php" ?> 



<?php include "includes/menu.php" ?>
	
	<div class="container ">
        
        <div class="row text-center">
		<h1 class="center title"> Annonces </h1>
		
		<img class="buuuud" src="bud.png" alt="">
		
	</div>

        <div class="row">


            <div class="col-md-2">
                
            </div>
            <div class="col-md-8">
                                 


                
                
                <?php 
       
    
                $query = "SELECT * FROM posts WHERE post_id = (SELECT max(post_id) from posts)";
                
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
                    de <a href="index.php"><?php echo $post_author;  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo " ".$post_date;  ?></p>
                
                 <div class="woop">
                <a  class="" href="post.php?p_id=<?php echo $post_id; ?>">
                    <img id="im" class="img-responsive"  src="images/<?php echo $post_image; ?>" alt="">
                </a>
                </div>
                
                <div>
                <p><?php echo $post_content;  ?></p>
                </div>
                
                
                <div class=""><a class="btn btn-success" href="post.php?p_id=<?php echo $post_id; ?>">Lire Plus <span class="glyphicon glyphicon-chevron-right"></span></a> </div>
                
                <br>
                
                <div class=""><a class="btn btn-success" href="blog-home.php">Blog <span class="glyphicon glyphicon-chevron-right"></span></a></div>
                
                
             
                                                

                                                
                  <?php                                        
                    } else {
                            echo "<h1 style='text-align:center'>Une nouvelle annonce très bientôt!</h1>";
                        }
                    }
     
     
                  ?>

               
            </div>

            <!-- Blog Sidebar Widgets Column -->
                
        </div>
        <div class="hrrr"></div>
        

</div>








<?php include "includes/reservation.php" ?> 

<div class="container contentContainer" id="plan">
	
	<div class="row text-center">
		<h1 class="center title"> Plan d'accès </h1>
		<img class="buuuud" src="bud.png" alt="">
	</div>
	
	<div class="row">
		
		<div class="col-md-4 margin-top center">
			<h3>Adresse</h3>
			<p>13 rue Saint-Hippolyte<br>13ème Arrondissement<br>Paris</p>
		</div>
		
		<div class="col-md-4 margin-top center">
			<h3>Parking</h3>
			<p>Parking Patriarches à 500m</p>
		</div>
		
		<div class="col-md-4 margin-top center">
			<h3>Metro</h3>
			<p>Metro les gobelins sur la ligne 7</p>
		</div>
	</div>
	
	<div id="carte"></div>
	
</div>
<?php include "includes/footer.php" ?> 