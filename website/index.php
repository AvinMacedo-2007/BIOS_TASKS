<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" >  
        <div class="form-box active" id="login-form"> 
            <form action="index.php" method ="post">
                <h2>LOGIN</h2>
                <input type="email" name="email" placeholder="Email" required>  <br>
                <input type="password" name="password" placeholder="password" required>  <br>
                <button type="submit" name="login"> Login </button>
                <p>Don't have an account? <a href="register.php">Register</a></p>
                
  
             </form>
        </div> 
    </div>
</body>
</html>

<?php
include('database.php');
include('session.php');
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "SELECT * FROM user_data WHERE email = '{$email}'";
$result = mysqli_query($conn,$sql);
 if(isset($_POST['login'])){

    if (mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    $hash = $row['password'];
    if ( password_verify($pass, $hash)) {
        $_SESSION['email']=$email;
        if ($row['role']=='admin'){
            header('Location: admin.php');
        }
        else{
            header('Location: user.php');
        }
    }
    else { echo 'wrong password';}


}
else {
    echo 'worng email ! <br> Try again';
}

 }
mysqli_close($conn);

?>