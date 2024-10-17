<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Configuração</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="stylepainel.css">
</head>
<body>
    
    <header>
    <nav>
    <a href="Home.php" title="Home">
          <i class="fas fa-house"></i>
        </a>
            <a href="../index.php">
            <i class="fas fa-building" title="Número de Apartamentos"></i>
            </a>
        </nav>
    </header>

        <h1>Painel de Controle</h1>
        <li class="list">
            <a href="../view/gerenciamento/cadastro.php" title="Cadastrar">
            <i class="fas fa-plus-square"></i>
            </a>
            <a href="../controller/dadosController.php" title="Mostrar dados">
            <i class="fas fa-bar-chart"></i>
            </a>
            <a href="../view/gerenciamento/edicao.php" title="Editar dados">
            <i class="fas fa-ellipsis-h "></i>  
            </a>
            <a href="../view/gerenciamento/remocao.php" title="Remover dados">
            <i class="fas fa-times"></i>
            </a>
        </li>
    
</body>
</html>