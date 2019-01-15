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



    $id = $_POST['id'];
    $nome = $_POST['nome'];
    /*$marca = $_POST['marca'];*/
    $garantia = $_POST['garantia'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $stock = $_POST['stock'];
  /*  $categoria = $_POST['categoria'];*/
    $file2 = $_POST['file2'];

    if (!empty($_FILES['file2'])) {
        $path = '../images/produtos/';
        $path = $path . iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file2']['name']));
        $file2 = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file2']['name']));
        $nomefoto = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file2']['name']));
        if (move_uploaded_file(iconv("UTF-8", "ASCII//TRANSLIT", $_FILES['file2']['tmp_name']), $path)) {
            $foto = iconv("UTF-8", "ASCII//TRANSLIT", basename($_FILES['file2']['name']));
        } else {
            $fotoErro = 'É obrigatório introduzir um Ficheiro!';
        }
    }

    $sql = "UPDATE produto set nome = :nome,/* marca_id = :marca*/, garantia = :garantia, descricao = :descricao, preco = :preco, quantidadeStock = :stock,/* categoria_id = :categoria*/, img1 = :file2 WHERE id = :id";
    $stmt = $PDO->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
  /*  $stmt->bindParam(':marca', $marca);*/
    $stmt->bindParam(':garantia', $garantia);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':stock', $stock);
  /*  $stmt->bindParam(':categoria', $categoria);*/
    $stmt->bindParam(':file2', $file2);


    $result = $stmt->execute();


    if (!$result){
        var_dump($stmt->errorInfo());
        exit;
    }

    require "produtos.php";

}

?>
