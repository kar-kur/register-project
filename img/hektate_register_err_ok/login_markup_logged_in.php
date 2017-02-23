<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/Master.css" rel="stylesheet" type="text/css" />
        <link href="css/Menu.css" rel="stylesheet" type="text/css" />   
        <title>Logged In</title>
 
    </head>
    <body>
        <div class="Container">
           <?php 
	require_once('Header.php');?>

        <div class="Menu">
        <div id="Menu">
             <nav>
                <ul class="cssmenu">

                    <li><a href="registration.php">Register</a></li>    

                    <li><a href="login.php">Login</a></li>  

                    <li><a href="update_account.php">Update Account</a></li>  

                    <li><a href="logout_logic.php">Logout</a></li>

                </ul>
             </nav>
          </div>
    </div>  

    <div class="LeftBody">
          <p><img src="img/Tor.jpg" width="277" height="362" class="img"></p>

        </div> 

    <div class="RightBody">
          
         <div class="h1">  Welcome <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, you are logged in!</div>  
	         
       <form action="" method="post">
            <input type="submit" class="Button" name="logout" value="Good Bye" echo "You have logged out"/>
        </form>

 
 </div>
</div>
   <div class="Footer"> <p>&copy;Alien | <a href="logout_logic.php" target="_self" >Admin</a></p></div>
       

    </body>
</html>
