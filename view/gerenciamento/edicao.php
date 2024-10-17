<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="controlesstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <nav>
    <a href="../painelDeControle.php">
    <i class="fas fa-user" title="PainelDeControle"></i>
</a>

<a href="../Home.php" title="Home">
          <i class="fas fa-house"></i>
        </a>
        </nav>
    </header>

    <h1>Edição de dados</h1>

    <form action="../../controller/edicaoController.php" method="post">
             
        <label>Apartamento: </label>
        <input type="number" id="numeroAp" name="numeroAp" required>
        <br>
        <label>Nome: </label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label>Telefone: </label>
        <input type="text" id="fone" name="fone">
        <br><br>
        <button type="submit" value="Editar dados">Editar dados</button>
    </form>
    
</body>
</html>
