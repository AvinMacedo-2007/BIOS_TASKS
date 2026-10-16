<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class = "container">
           <form action="register.php" method="post">
                <h2>REGISTER</h2>
                <label for="name">name:</label>
                <input type="text" id ="name" name="name" placeholder="Name" required> <br> 
                <label for="email">email:</label>
                
    
                <input type="email" id= "name" name="email" placeholder="Email" required> <br> 
                <label for="password">password:</label>
                <input type="password" id="password" name="password" placeholder="password" required> <br> <br>
                
                <br>
                <button type="submit" name="register"> Register </button>
                <p>Already have an account? <a href="index.php">Login</a></p>
  
             </form>
        </div>
</body>
</html>

<!-- inserting into database php -->
<?php
include('database.php');
$name = $_POST['name']   ;            
$email = $_POST['email']  ;                                           
$password = $_POST['password'] ;
$hash = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO user_data (username, email, password, role ,image_source)
        VALUES ('{$name}', '{$email}','{$hash}','user' ,'images/superman.png')";
        
mysqli_query($conn, $sql);
mysqli_close($conn);


?>
