<?php
$link = mysqli_connect("localhost", "root", "", "demo");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['email']);
$email = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "INSERT INTO nametable (Email, Password) VALUES ('$_POST[email]', '$_POST[password]')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
