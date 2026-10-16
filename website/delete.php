

<?php
include('database.php');
include('session.php');
if(isset($_SESSION['email'])) {
    echo "<br>";
}
else{  header('location:admin.php');

}



if(isset($_POST['login'])){
    $name=$_POST['username'];
    $sql = "SELECT * FROM user_data WHERE username = '{$name}'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0) {
        $sqldel = "DELETE FROM user_data WHERE username = '{$name}'";
        mysqli_query($conn,$sqldel);
        header('location:admin.php?msg=USER DELETED SUCCESSFULLY!');

         
    }
    else
        {
    // {echo'wrong username!';
     header('location:admin.php?msg=WRONG USERNAME!');

}

}

?>