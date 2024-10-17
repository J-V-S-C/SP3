<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Remoção de Morador</title>
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

      <h1>Remover Usuário</h1>

    <form method="post" action="../../controller/remocaoController.php">
      <label>Digite o número de apartamento que deseja remover:</label>
      <input type="number" name="numeroAp" required>
      <br><br>
      <button type="submit" value="Enviar">Enviar</button>
    </form>


  </body>
</html>
