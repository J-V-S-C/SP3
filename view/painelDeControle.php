<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Configuração</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="stylepainel.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    
    <header>
        <h1>Painel de Controle</h1>
        <nav>
            <a href="Home.php" title="Página Inicial">
                <i class="fas fa-house"></i> Home
            </a>
            <a href="../index.php" title="Número de Apartamentos">
                <i class="fas fa-building"></i> Apartamentos
            </a>
        </nav>
    </header>

    <main>
        <ul class="list">
            <li>
                <a href="../controller/dadosController.php" title="Exibir dados">
                    <i class="fas fa-bar-chart"></i> Mostrar Dados
                </a>
            </li>
            <li>
                <a href="../view/gerenciamento/cadastro.php" title="Cadastrar novo dado">
                    <i class="fas fa-plus-square"></i> Cadastrar
                </a>
            </li>
            <li>
                <a href="../view/gerenciamento/edicao.php" title="Editar dados">
                    <i class="fas fa-edit"></i> Editar Dados
                </a>
            </li>
            <li>
                <a href="../view/gerenciamento/remocao.php" title="Remover dados">
                    <i class="fas fa-times"></i> Remover Dados
                </a>
            </li>
        </ul>
    </main>
    
</body>
</html>
