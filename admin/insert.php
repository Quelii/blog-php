<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
    <main class="container">
        <form action="enviar.php" method="post" enctype="multipart/form-data">
    <!--formulario-->

<link rel="stylesheet" href="/style.css">
 <h1>Inserir</h1>
    <div class="mb-3">
  <label for="title	" class="form-label">TItulo</label>
  <input type="text" class="form-control" name="title" placeholder="Digite o TItulo" required>
</div>
<div class="mb-3">
  <label for="data" class="form-label">Data</label>
  <input type="date" class="form-control" placeholder="Digite a Data" name="data" required>
</div>
<div class="mb-3">
  <label for="description" class="form-label">Texto Descritivo</label>
  <input type="text" class="form-control"  placeholder="Descrição" name="description" required>
</div>
<div class="mb-3">
  <label for="image" class="form-label">Enviar Imagem</label>
  <input type="file" class="form-control"  placeholder="Insira Uma Imagem" name="image" required>
 <div>
  <label for="  ">         </label>  
 </div> 
  <div class="mb-3">
     <input type="submit" value="Publicar" class="btn btn-primary">
  </div>
 
</div>
</form>
    </main>
</body>
<footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</footer>
</html>