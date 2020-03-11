<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Cadastro de Produtos</title>
</head>

<body>
  <!-- Formulário de cadastro -->
  <div class="container">
    <h3 class="text-center">
      Formulário
      <small class="text-muted">de Cadastro</small>
    </h3>
    <form action="_inserir_produto.php" method="POST">
      <div class="form-group">

        <input type="number" class="form-control" name="nroproduto" placeholder="Digite o número do produto"
          autocomplete="off" required>
        <span class="badge badge-danger"> Campo obrigatório!!!</span>
      </div>
      <div class="form-group">
        <label>Nome do Produto</label>
        <input type="text" class="form-control" name="nameproduto" placeholder="Digite o nome do produto"
          autocomplete="off" required>
        <span class="badge badge-danger"> Campo obrigatório!!!</span>
      </div>
      <div class="form-group">
        <label>Categorias</label>
        <select class="form-control" name="categoria">
          <option>Periféricos</option>
          <option>Hardwares</option>
          <option>Softwares</option>
          <option>Celulares</option>
      </div>

      <div class="form-group">
        <label>Qtd de Produto</label>
        <input type="number" class="form-control" name="qtd" placeholder="Digite a quantidade do produto"
          autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Fornecedores</label>
        <select class="form-control" name="fornecedor">
          <option>Fornecedor A</option>
          <option>Fornecedor B</option>
          <option>Fornecedor C</option>
          <option>Fornecedor D</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button>
    </form>
  </div>
  <div class="card text-center">
    <h3 class="text-center">
      Estudos
      <small class="text-muted">PHP com Bootstrap</small>
    </h3>


    <div class="card-body">
      <h5 class="card-title">Criando um Sistema do zero, Inserir,editar e excluir valores e com atualizações de outros
        recursos</h5>
      <a href="#" class="btn btn-primary">Ir para meu site</a>
    </div>
    <h3 class="text-center">
      Eduardo
      <small class="text-muted">Developer</small>
    </h3>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

</body>

</html>