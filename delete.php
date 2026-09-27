<?php
include 'db.php';
session_start();

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql=$con->prepare('delete from products where product_id=?');
    $sql->bind_param('i',$id);
    if($sql->execute()){
        header('location:home.php');
        exit();
    }
}

?>