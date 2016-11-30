<?php include("include/header.php"); ?>	

<html lang = "en">
   
   <head>
      <title>Math Game</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
	  <meta charset="utf-8" />
   </head>
	
   <body>  
      <h2>Please login to enjoy your math game.</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'mathmaster' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'mathmaster';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
		 
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
           
			<h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            
			   
			<input type="text" class ="form-control" name="name" placeholder="username = mathmaster" required autofocus></br>

			   
            <input type = "password" class = "form-control"name = "password" placeholder = "password = 1234" required></br>
			
            <a href="mathgame.php" class = "btn btn-success" type = "submit" name = "login">Login</button>
			   
         </form>
      </div> 
      
   </body>
</html>