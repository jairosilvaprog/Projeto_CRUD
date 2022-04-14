<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição de produto</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="box">
        <form action="{{ route ('editar_produto', [ 'id' =>$produto->id ] )}}"  method="POST">
        @csrf
            <fieldset>
                <legend>Editar produto:</legend>
            <div class="inputBox">
                <input type="text" name="nome" class="inputUser" value="{{ $produto->nome }}" required><br>
                <label for="nome" class="labelInput">Nome:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="custo" class="inputUser" value="{{ $produto->custo }}"required><br>
                <label for="custo"class="labelInput">Custo:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="preço" class="inputUser" value="{{ $produto->preço }}"required><br>
                <label for=""class="labelInput">Preço:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="quantidade" class="inputUser" value="{{ $produto->quantidade }}"required><br>
                <label for=""class="labelInput">Quantidade:</label>
            </div>
                <br><br>
                <input type="submit" name="submit"id="submit" value="Salvar edição">
            </div>
            </fieldset>
        </form>
    </div>   
</body>
</html>