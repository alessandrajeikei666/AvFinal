<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "{{route ('excluir_produto, ['id'=>$produto->id])}}"  method='post'>
         @csrf 
         <label for=""> Tem certeza? </label>
         <input type='text' value="{{produto->nome}}">
         <button type="submit">Sim</button>
</body>
</html>