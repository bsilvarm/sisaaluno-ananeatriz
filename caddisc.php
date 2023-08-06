<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="caddic.css">
    <title>CADASTRO DISCIPLINAS</title>
</head>
<body>
<div class="container">
     <h1>Cadastro de disciplinas</h1>
  <form method="GET" action="cruddisc.php">
    <label for="">Nome</label>
     <input type="text" name="nome" required maxlength="100">

     <label for="">CH</label>
     <input type="text" name="ch" required maxlength="80">

     <label for="">Semestre</label>
     <input type="text" name="semestre" required max="100"> 

     <label for="">Id professor</label>
     <input type="text" name="idprofessor"  required maxlength="80">
   
    
     <br>
<div class="botao1">
<input type="submit" name="cadastrar" value="cadastrar" ><a href="caddisc.php">
     </div>
     </form>
     <br>
     <div class="botao2">
          <br>
     <button class="button" ><a href="caddisc.php" ><a href="caddisc.php" ><a href="index.php">voltar</a></button>
     </div>
     </div>
 
    </form>
</body>