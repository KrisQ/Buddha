<?php include "includes/header.php"; ?>
<?php include "includes/db.php"; ?>

<body>

    <!-- Navigation -->
    
    <?php include "includes/navigation.php"; ?> 
                 <div class="header">
                  <div class="test">
                  <div class="well">
                   <form action="includes/login.php" method="post">
                    <h4>Login</h4>
                    
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Enter Username">
                    </div>
                    
                    <div class="input-group">
                        <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        <span class="input-group-btn">
                           <button class="btn btn-success" name="login" type="submit">Login</button>
                        </span>
                    </div>
                    
                    </form>
                    <!-- /.input-group -->
                </div>
                </div>
                </div>  
</body>
  <?php include "includes/javascript.php"; ?>