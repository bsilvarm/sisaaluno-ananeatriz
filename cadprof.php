<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadprof.css">
    <title>CADASTRO PROFESSOR</title>
</head>
<body>
  
   <div class="container">
    <h1>Cadastro de professores</h1>
  <form method="GET" action="crudprof.php">
    <label for="">Nome</label>
     <input type="text" name="nome" required maxlength="100">

     <label for="">Endereço</label>
     <input type="text" name="endereco" required maxlength="80">

     <label for="">Idade</label>
     <input type="number" name="idade" required max="100"> 

     <label for="">Data de Nacimento</label>
     <input type="date" name="datanascimento" required>

     
     
     <div class="botao1">
<input type="submit" name="cadastrar" value="cadastrar" ><a href="cadprof.php">
     </div>
     </form>
     <br>
     <div class="botao2">
          <br>
     <button class="button" ><a href="cadprof.php" ><a href="cadprof.php" ><a href="index.php">voltar</a></button>
     </div>
     </div>
     

</body>
</html>