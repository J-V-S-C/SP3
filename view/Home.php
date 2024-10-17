<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento dos Apartamentos</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<?php

if (isset($_POST['Aps']))
{
$quant = $_POST['Aps'];
    if($quant > 400)
    {
         header('location:\index.php?cod=erro');
    }
}
    ?>
    <header>
       
        <nav>
            <a href="./painelDeControle.php">
            <i class="fas fa-user" title="PainelDeControle"></i>
            </a>
            <a href="../index.php">
            <i class="fas fa-building" title="Número de Apartamentos"></i>
            </a>
        </nav>
    </header>
     <h1>SP3</h1>
    <main>
        <?php

        if ($_POST) {
            $Aps = $_POST['Aps'];
            echo '<div class="container">';
            for ($i = 0; $i < $Aps; $i++) {
                echo '
                    <div class="box">
                        <label>Nome</label><br>
                        <label>Número</label><br>
                        <label>Telefone</label><br>
                        <label>Infrações</label><br>
                    </div>
                ';
            }
            echo '</div>';
        }

        ?>
    </main>
</body>
</html>
