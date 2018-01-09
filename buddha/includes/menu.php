<div>
<div class="container " id="menu">
	<div class="row text-center">
		<h1 class="center title"> Menu </h1>
		
		<img class="buuuud" src="bud.png" alt="">
		
	</div>
	
	<?php  $index_x = 1; ?>
	
	
	
	
	
<div class="row">



	
	
	     <?php 
                    $query = "SELECT * FROM mentit";
                    $select_Categories_sidebar = mysqli_query($connection,$query);
                    
                 

                    
?>
	
		
	
	  <?php 
                                
                                   while ($row = mysqli_fetch_assoc($select_Categories_sidebar)) {
                        
                    $cat_title = $row['menu_title'];
                    $cat_id = $row['menu_title_id'];
                        
                    
                        
                    
                                
                                ?>
                                
                                 <?php
                                      
                                       
                                       if (is_int($index_x/3)) { echo "<div class='row'>"; }?>
                               
                                
                                <div class="col-md-4 margin-top">
	
		<h2><span class="glyphicon glyphicon-circle-arrow-down"></span> <?php echo "$cat_title"; ?></h2>
			
			
			  <?php 
                
                
            
                $query = "SELECT * FROM menu WHERE menu_title_id_id = $cat_id ";
                
                $selectAllPosts = mysqli_query($connection,$query);
                    
                    while ($row = mysqli_fetch_assoc($selectAllPosts)) {
                        
                        $post_title = $row['menu_panel_title'];
                        $post_content = $row['menu_panel_description'];
                       $menu_id = $row['menu_id'];
                        ?>
                        
			
<div class="panel-group" id="accordion">
		
		<div class="panel panel-default">
				<div class="panel-heading highlight1">
						<h4 class="panel-title whity"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo "$menu_id"; ?>"> <i class="indicator glyphicon glyphicon-plus-sign"></i> <?php echo $post_title; ?> </a> </h4>
				</div>
				<div id="collapse<?php echo "$menu_id"; ?>" class="panel-collapse collapse">
						<div class="panel-body">
                           <?php 
                            echo $post_content;
                            
                            ?></div>
				</div>
</div>
		
	
    </div>
    
    <?php } ?>

    </div>
    
      
		
				
		<?php } ?>				
								
												
</div>
				 <?php
            if (is_int($index_x/3)) {echo "</div>";}   
                        
                $index_x = $index_x + 1;
                     
                  ?>
		
			
				
					
								
	<div class="row">
	<div class="col-md-12">
		<h4 class="center" id="tele">Si vous le désirez, vous pouvez télécharger le PDF du menu complet  <a href="MenuBuddha.pdf" download="Menu Restaurant Buddha">ici</a></h4>
		</div>
	</div>
   
   <div class="hrr"></div>
    </div></div>