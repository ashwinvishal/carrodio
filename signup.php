<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet"  href="style2.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label> First Name</label>
          <?php if (isset($_GET['fname'])) { ?>
               <input type="text" 
                      name="fname" 
                      placeholder="First Name"
                      value="<?php echo $_GET['fname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="fname" 
                      placeholder="First Name"><br>
          <?php }?>

          <label> Last Name</label>
          <?php if (isset($_GET['lname'])) { ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Last Name"
                      value="<?php echo $_GET['lname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Last Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
          
          <label> Email</label>
          <?php if (isset($_GET['emailadd'])) { ?>
               <input type="text" 
                      name="emailadd" 
                      placeholder="Email"
                      value="<?php echo $_GET['emailadd']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="emailadd" 
                      placeholder="Email"><br>
          <?php }?>
          
          <label> Phone Number</label>
          <?php if (isset($_GET['phoneNo'])) { ?>
               <input type="text" 
                      name="phoneNo" 
                      placeholder="Phone Number"
                      value="<?php echo $_GET['phoneNo']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phoneNo" 
                      placeholder="Phone Number"><br>
          <?php }?>

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          
     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>