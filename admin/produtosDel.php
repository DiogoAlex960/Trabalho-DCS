<?
session_start();

if((!isset ($_SESSION['login'])) ){
    header('location:../index.php');
}else{
    /*  Posso fazer o que quiser aqui */


}
?>
<?php
    include "db.php";

    $id = $_REQUEST['id'];


    $sql = "DELETE FROM produto WHERE id = :id";
    $stmt = $PDO->prepare($sql);

    $stmt->bindParam(':id', $id);

    $result = $stmt->execute();

    if (!$result){
        var_dump($stmt->errorInfo());
        exit;
    }


    require "produtos.php";
 ?>
