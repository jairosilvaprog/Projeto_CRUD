<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário visualização produto</title>
    <link rel="stylesheet" href="/css/style.css">    
</head>
<body>
    <div class="box">
        <fieldset>
            <legend>Produto cadastrado id: {{$produto->id}}</legend>
                <p><h1>Nome: {{$produto->nome}}</h1></p>
                <p><h1>Custo: {{$produto->custo}} R$</h1></p>
                <p><h1>Preço: {{$produto->preço}} R$</h1></p>
                <p><h1>Quantidade: {{$produto->quantidade}}</h1></p> 
        </fieldset>
    </div>
</body>
</html>