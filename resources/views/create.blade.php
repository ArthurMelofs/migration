<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
</head>
<body>
 <div class= "container">
    <h1>Crie um novo RPG</h1>
    <hr>
    <form action="{{route('rpgs-store')}}" method="POST">

    @csrf
      <div class="form-group" >
            <div class="form-group" >
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
            </div>
            <br>
            <div class="form-group" >
                <label for="empresa">Empresa:</label>
                <input type="text" class="form-control" name="empresa" placeholder="Digite a empresa do RPG...">
          </div>
          <br>
          <div class="form-group" >
                <label for="ano_criação">Ano de criação:</label>
                <input type="year" class="form-control" name="ano_criação" placeholder="Ano de criação...">
            </div>
            <br>
            <div class="form-group" >
                <label for="valor">Valor:</label>
                <input type="number" class="form-control" name="valor" placeholder="Valor...">
            </div>
            <br>
            <div class="form-group" >
                <input type="submit" name= "submit" class= "btn btn-primary">
            </div>
        </div>
    </form>
 </div>
</body>
</html>
