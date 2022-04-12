<!DOCTYPE html>
<html>
    <head>
    <title>Database</title>
    <style>
        form{
            display: block;
            margin: 30px;
            position: right;
            height: 5vh;
            width: 4vh;
            font-family: cursive;
        }
        </style>
    </head>
    <body>
        <form action="database.php" method="post" enctype="multipart/form-data">
        Name:<input type="text" name="name-input" placeholder="Name">
        Email:<input type="text" name="email-input" placeholder="Email">
        Password:<input type="password" name="password-input" placeholder="password">
        File:<input type="file" name="file" placeholder="profile picture">


        <button type="submit" name="btn">submit</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST['btn'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    
    $btn = $_FILES;
    if($btn){
      $file = $_FILES['file'];
    $tempLocation = $file['tmp_name'];
    $uploadLocation = "upload.txt/$name";
    $upload =  move_uploaded_file($tempLocation, $uploadLocation);  
    }
    if(empty($name)){
        echo "form not completed";
        return null;  
      }
    echo "form completed";
}

$myfile = fopen("database.txt", "w") or die("Unable to open file!");
    fwrite($myfile, "User");
    fwrite($myfile, "\n Name:s");
    fwrite($myfile, "\n Email: ");
    fwrite($myfile, "\n Password: ");
    fclose($myfile);
?>