<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - GET</title>
</head>

<body>
    <form action="Cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do Carro">
        </div>
        <div>
            <input type="number" name="preco" placeholder="Preço do Carro">
        </div>
        <div>
            <input type="checkbox" name="opcional[]" value="Teto Solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcional[]" value="Película">Película
        </div>
        <div>
            <input type="checkbox" name="opcional[]" value="Blindado">Blidando
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite a senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>