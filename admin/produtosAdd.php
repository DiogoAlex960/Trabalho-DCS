<?
session_start();

if((!isset ($_SESSION['login'])) ){
    header('location:../index.php');
}else{
    /*  Posso fazer o que quiser aqui */


}
?>
<?php


require_once "db.php";

if($_POST){


  $nome = $_POST['nome']; ?><br/><?php
  /*$marca = $_POST['marca']; ?><br/><?php*/
  $garantia = $_POST['garantia']; ?><br/><?php
  $descricao = $_POST['descricao']; ?><br/><?php
  $preco = $_POST['preco']; ?><br/><?php
  $stock = $_POST['stock']; ?><br/><?php
/*  $categoria = $_POST['categoria']; ?><br/><?php*/
  $file3 = $_POST['file3']; ?><br/><?php

   if(empty($_POST["nome"])) {
    $nomeErro ="O nome é um campo obrigatório";
  } else {
    $nome = $_POST["nome"];
  }

  if(empty($_POST["garantia"])) {
    $garantiaErro ="A garantia é um campo obrigatório";
  } else {
    $garantia = $_POST["garantia"];
  }

  if(empty($_POST["descricao"])) {
    $descricaoErro ="O nome é um campo obrigatório";
  } else {
    $descricao = $_POST["descricao"];
  }

  if(empty($_POST["preco"])) {
    $precoErro ="O preço é um campo obrigatório";
  } else {
    $preco = $_POST["preco"];
  }

  if(empty($_POST["stock"])) {
    $stockErro ="O stock é um campo obrigatório";
  } else {
    $stock = $_POST["stock"];
  }


   if (!empty($_FILES['file3'])) {
    $path = '../images/produtos/';
    $path = $path . iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file3']['name']));
    $file3 = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file3']['name']));
    $nomefoto = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file3']['name']));
    if (move_uploaded_file(iconv("UTF-8", "ASCII//TRANSLIT", $_FILES['file3']['tmp_name']), $path)) {
        $foto = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file3']['name']));
    } else {
        $fotoErro = 'É obrigatório introduzir um Ficheiro!';
    }
}


  $sql = "INSERT INTO produto(nome/* marca_id*/, garantia, descricao, preco, quantidadeStock/* categoria_id*/, img1)
  VALUES( :nome,/*:marca, :garantia*/ :descricao, :preco, :stock, :categoria, :img1)";
  $stmt = $PDO->prepare( $sql );

  $stmt->bindParam(':nome', $nome);
/*  $stmt->bindParam(':marca', $marca);*/
  $stmt->bindParam(':garantia', $garantia);
  $stmt->bindParam(':descricao', $descricao);
  $stmt->bindParam(':preco', $preco);
  $stmt->bindParam(':stock', $stock);
  /*$stmt->bindParam(':categoria', $categoria);*/
  $stmt->bindParam(':img1', $file3);
;





  require "produtos.php";

}
?>
