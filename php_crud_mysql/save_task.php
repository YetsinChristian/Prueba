<?php
include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "insert into task(title,description) values ('$title','$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query failed");
    }else{
        $_SESSION['message']='Task Saved succesfully';
        $_SESSION['message_type']='success';
        header("Location:index.php");
    }

}
?>