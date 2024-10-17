<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SP3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>

      <nav>
        <h1>SP3</h1>
        <a href="./view/Home.php" title="Home">
          <i class="fas fa-house"></i>Home
        </a>
      </nav>
    </header>
    <h2>Bem vindo ao sistema!</h2>
    <form method="post" action="./view/Home.php">
      <label>Digite o número de apartamentos:</label>
      <input type="number" name="Aps" placeholder="Número de APs" required>
      <br><br>
      <button type="submit" value="Enviar">Enviar</button>
    </form>

      <br>
      
    <?php

if(isset($_GET['cod']) && $_GET['cod'] == 'erro')
{   
    echo '<label class="text-danger">Insira entre 1 a 100 APs!</label>';
}

  ?>


  </body>
</html>
