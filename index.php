<html>
  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela inicial</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

  <div class="container">
    
  <form action="login.php" method="post">
    <div class="mb-3">
      <label class="form-label">Digite email</label>
      <br>
      <input type="email" class="form-control" name="usuario">
    </div>
   <div class="mb-3"> 
    <label class="form-label" >Digite senha</label>
    <input type="password" class="form-control" name="senha" required>
   </div>
    <input type="submit" value="logar" class="btn btn-primary">
  </form>  
  </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
