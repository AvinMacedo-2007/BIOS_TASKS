<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <BR></BR>
    <center><h1></h1></center>
</body>
</html>

<!-- DISPLAYING PROFILE PICTURE AND IMPLEMENING SESSION_START-->

<?php
include('session.php');
if(isset($_SESSION['email'])) {

    include('database.php');
    $email = $_SESSION['email'];
    $sql= "SELECT image_source ,username FROM user_data WHERE email = '{$email}'";
    $result=mysqli_query($conn,$sql);
    if($result==true){
        if(mysqli_num_rows($result)>0){
            $pic=mysqli_fetch_assoc($result);
            $username = strtoupper($pic['username']);
            echo"<center><h1>{$username}</h1></center>";
            $picture=$pic['image_source'];
            echo "<center><img src='$picture' height='100px' width='100px'></center>";
        }
    }


    echo "<br>";

}
else
    {
        header('location:index.php');

    }


?>


<br>


<p><h3>Want to change your username?</h3></p>
<form action="user.php" method="get">
    <label for="currentusername">Enter new username:</label>
    <input type="text" id="newusername1" name="newusername1" placeholder ="enter new username" required>
    <label for="new_username">Re enter new username:</label>
    <input type="text" id="new_username" name="new_username" placeholder="Re enter new username" required>
    <br>
    <br>
    <input type="submit" name="name">

</form>


<?php  
include('session.php');
$email=$_SESSION['email'];
include('database.php');
$name=$_GET['new_username'];
$cname=$_GET['newusername1'];
if(isset($_GET['name'])){
    if ($name == $cname){
        $sql="UPDATE user_data SET username ='{$name}' WHERE email ='{$email}'";
        $result = mysqli_query($conn,$sql);
    }
    else
        { echo "entered usernames don't match!";
    }
    
    if ($result== true){

        echo '<br> Successfully updated!';
}   
    else{
        echo"error!";
    }


}

// echo"$cname";
// echo"$name";



 ?>
<br>
<p><h3>Want to change your email?</h3></p>
<form action="user.php" method="get">
    <label for="currentemail">Enter new email:</label>
    <input type="email" id="currentemail" name="currentemail" placeholder="enter current email" required>
    <label for="newemail">Re enter new email:</label>
    <input type="email" id="newemail" name="newemail" placeholder ="enter new email" required>
    <br>
    <br>
    <input type="submit" name="email">

</form>
<?php
include('session.php');
$email=$_SESSION['email'];
include('database.php');
$nemail=$_GET['newemail'];
$cemail=$_GET['currentemail'];
if(isset($_GET['email'])){
    if ($nemail == $cemail)
        {
            $sql="UPDATE user_data SET email ='{$nemail}' WHERE email ='{$email}'";
            $result = mysqli_query($conn,$sql);

        }
    else {
        echo "entered emails don't match!";
    }

    if ($result== true){
        echo '<br> Successfully updated!';
        $_SESSION['email'] = $nemail;
        header('Location: user.php');
    }
    else{
        echo"error!";
}


}
?>
<!-- // echo"$cname";
// echo"$name"; -->
<br>
<p><h3>Want to change your password?</h3></p>
<form action="user.php" method="get">
    <label for="username">Enter new password:</label>
    <input type="text" id="username" name="username" placeholder="enter current username" required>
    <label for="newpassword">Re enter new password:</label>
    <input type="password" id="newpassword" name="newpassword" placeholder ="enter new password" required>
    <br>
    <br>
    <input type="submit" name="password">

</form>
<?php
include('session.php');
$email=$_SESSION['email'];
$npass=$_GET['newpassword'];
$hash=password_hash($npass,PASSWORD_DEFAULT);
$username=$_GET['username'];
// echo"$cname";
// echo"$name";
if(isset($_GET['password'])){
    if ( $npass == $username){
        $sql="UPDATE user_data SET password ='{$hash}' WHERE email ='{$email}'";
        $result = mysqli_query($conn,$sql);
    }
    else{
        echo "entered passwords don't match!";
    }

    if ($result== true){
        echo '<br> Successfully updated!';}
    else{
         echo"error!";

}

}

?>



<!-- displaying and updating the profile pic -->

<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>

</head>
<body>
    <br>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="upload"><h3>Want to update profile picture?</h3></label>
        <br>
        <br>
        <input type="file" name="uploadfile" id="upload" required>
        <br>
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>
    
</body>
</html>




<br>


<!-- image uploading  -->



<?php     

if (isset($_POST['submit'])){


    if(isset($_FILES['uploadfile']) && $_FILES['uploadfile']['error'] == UPLOAD_ERR_OK) {
        $filename = $_FILES['uploadfile']["name"];
        $tempname = $_FILES['uploadfile']["tmp_name"];
        $folder="images/".$filename;

        if (move_uploaded_file($tempname,$folder)){
            echo 'file uploaded sussfully!';
            include('session.php');
            if(isset($_SESSION['email'])) {
                include('database.php');
                $email = $_SESSION['email'];
                $sql="UPDATE user_data SET image_source ='{$folder}' WHERE email = '{$email}'";
                $result=mysqli_query($conn,$sql);
                echo'updated in database';
                header('location:user.php');

                }

            else{
                echo "could not move the file. check folder permissions.";
        }
    }   else{
        echo"upload failed.";
    }
}
}

?>

<a href="logout.php">Logout</a>
