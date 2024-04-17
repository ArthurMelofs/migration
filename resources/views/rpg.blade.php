<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG</title>
</head>
<body>
    <h1>Listagem de RPG</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Empresa</th>
      <th scope="col">Ano de criação</th>
      <th scope="col">Valor</th>

    </tr>
  </thead>
  <tbody>
  @foreach($rpg as $rpgs)

  <tr>
      <th scope="row">1</th>
      <td>{{$rpgs->id}}</td>
      <td>{{$rpgs->nome}}</td>
      <td>{{$rpgs->empresa}}</td>
      <td>{{$rpgs->ano_criação}}</td>
      <td>{{$rpgs->valor}}</td>
     
    </tr>
  @endforeach
  </tbody>
</table>
</body>
</html>