<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <title>LogIn</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/logIn.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
   </head> 

   <body>

   <form action ='./PHP/signin.php' method='POST'>
        <div class="logIn">
        <!-- <div class="alert alert-danger ">
  <strong><?php echo $_GET['error'];?></strong> 
</div> -->
        <h1 id="logo">LogIn</h1>
        <div class ="textbox">
         <i class="fas fa-user"></i>
           <input type ="text" required placeholder="Username" name="user" value="">
        </div>

        <div class="textbox">
         <i class="fas fa-lock"></i>
         <input type ="password" required placeholder="Password" name="pass" value="">
        </div>
        
        <input style="font-size: large ;" type="submit" class=" btn btn-outline-warning btn-block display-4" name="login" value="LogIn">
        </form>

        <input id="1" type="checkbox" name="Remember Me" value="Remember Me">
        <label for="1">Remember Me</label>
        </div>
   </body>
</html>
