<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="listaprof.css">
</head>
<body>
    
</body>
</html>
    
<?php 

/*
 * Melhor prática usando Prepared Statements
 * 
 */
  require_once('conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM professor');
  $retorno->execute();

?>     
  <div class="container">
        <table>
             
            <thead>
              
                <tr>
                    <th style="font-size: 15px;">ID</th>
                    <th style="font-size: 15px;">NOME</th>
                    <th style="font-size: 15px;">IDADE</th>
                    <th style="font-size: 15px;">ENDERECO</th>
                    <th style="font-size: 15px;">DATA NACIMENTOS</th>
                    
                </tr>
                
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td style="font-size: 15px;"> <?php echo $value['id'] ?>   </td> 
                            <td style="font-size: 15px; margin-left: 30px;"> <?php echo $value['nome']?>  </td> 
                            <td style="font-size: 15px;"> <?php echo $value['idade']?> </td> 
                            <td style="font-size: 15px;"> <?php echo $value['endereco']?> </td>
                            <td style="font-size: 15px;"> <?php echo $value['datanascimento']?> </td>
                            

                            <td>
                               <form method="POST" action="altprof.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit" >Alterar</button>
                                </form>

                             </td> 

                             <td>
                               <form method="GET" action="crudprof.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit" >Excluir</button>
                                </form>

                             </td> 


                       
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
        
        <div class="voltar"></div>
<?php         
   echo "<button class='button button3' ><a href='index.html'>voltar</a></button>";
?>
</div>
                    </div>
