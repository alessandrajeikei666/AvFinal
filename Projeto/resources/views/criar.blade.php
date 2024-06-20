<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produtos</title>
</head>
<body>
    <form action='{{route(produto.store)}}' metod='post'>
     @csrf
     <label>Nome</label>
     <input type='text' name='nome' id='nome'>
     <label for="">Data de Validade</label>
     <input type="date" name="Data de Validade" id="Data de Validade">
     <button type="submit">Cadastrar</button>
</body>
</html>