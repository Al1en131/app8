<!DOCTYPE html>
<html>
<head>
   <title>Form Login</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
   <div id="wrapper">
      <form action="proseslogin.php" method="POST">
            <h1>SIMRS</h1>
            <p>Silahkan masukan username dan password anda</p>
         <label>Username</label>
         <input type="text" name="username" placeholder="Username" required="" autofocus=""><br><br>
         <label>Password </label>
         <input type="password" name="password" placeholder="Password" required="" ><br><br>
         <button type="submit">SIGN IN</button>
      </form>
   </div>
   
      <?php if(isset($_GET['pesan'])) { ?>
         <div class="error">
            <label><?php echo $_GET['pesan']; ?></label>
         </div>
      <?php } ?>
   

      
</body>
</html>