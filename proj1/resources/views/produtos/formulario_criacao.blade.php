<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Cadastro de produtos</title>
</head>
<body>
    <div class="box">
        <form action="{{ route ('registrar_produto')}}" method="POST">
                @csrf 
            <fieldset>
                <legend>Formulário de cadastro</legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome do produto:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="custo" class="inputUser" required>
                    <label for="custo" class="labelInput">Custo de compra:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="preço" class="inputUser" required>
                    <label for="preço" class="labelInput">Preço de venda:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidade"class="inputUser"required>
                    <label for="quantidade" class="labelInput">Quantidade em estoque:</label>
                </div>
                <br><br>
                <input type="submit" name="submit"id="submit" value="Cadatrar">
            </fieldset>
        </form>
    </div>
</body>
</html>