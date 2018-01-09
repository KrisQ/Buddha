 <?php session_start(); ?>

       <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./#restaurant">Restaurant Buddha</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="./#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="./#nous">Nous</a>
                    </li>
                    <li class="page-scroll">
                        <a href="./#menu">Menu</a>
                    </li>
                                        <li class="page-scroll">
                        <a href="./#reservation">Réservation</a>
                    </li>
                    <li class="page-scroll">
                        <a href="./#plan">Accès</a>
                    </li>
                     <li class="page-scroll">
                        <a href="./#infos">Contact</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="blog-home.php">Blog</a>
                    </li>
                    
                      <?php 
            
            if (isset($_SESSION['user_role'])) {
                
                echo "<li><a href='admin/'>Admin</a></li>";
                                
                if (isset($_GET['p_id'])) {
                    
                    $pid = $_GET['p_id'];
                    
                    echo "<li><a href='admin/posts.php?source=edit_posts&p_id={$pid}'>Edit Post</a></li>";
                }
            }
            
            ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   