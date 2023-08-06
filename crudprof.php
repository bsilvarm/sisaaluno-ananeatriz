<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crudprof.css">
    <title>Document</title>
</head>
<body>


<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nomeprof = $_GET["nome"];
        $idadeprof = $_GET["idade"];
        $enderecoprof = $_GET["endereco"];
        $dataprof = $_GET["datanascimento"];
       
      

        ##codigo SQL
        $sql = "INSERT INTO aluno(nome,endereco,idade, datanascimento) 
                VALUES('$nomeprof','$enderecoprof',$idadeprof,'$dataprof')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <p><strong>OK!</strong> o professor
                $nomeprof foi Incluido com sucesso!!!</p>"; 
                echo " <button class='button'><a href='index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){


    ##dados recebidos pelo metodo POST
    $id=  $_POST["id"];
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
  
   
      ##codigo sql
    $sql = "UPDATE  Professor SET nome= :nome, idade= :idade, endereco= :endereco, datanascimento= :datanascimento,  WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <p> <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!</p>"; 

            echo " <button class='button'><a href='index.php'>voltar</a></button>";
        }

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo "<p> <strong>OK!</strong> o professor
             $id foi excluido!!!</p>"; 

            echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
        }

}

        
?>

</body>
</html>