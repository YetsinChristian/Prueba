<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from task where id =$id";
    $result=  mysqli_query($conn,$query);
    if(!$result){
        die("Query Fail");
    }else{
        $_SESSION['message']='Task removed successfully';
        $_SESSION['message_type']='danger';
        header("Location: index.php");
    }
}

?>