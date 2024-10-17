<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../../style.css">
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

    <h1>Cadastro de morador</h1>

    <form action="../../controller/cadastroController.php" method="post">
             
        <label>Nome: </label>
        <input type="text" id="nome" name="nome" placeholder="Insira seu nome" required>
        <br>
        <label>Apartamento: </label>
        <input type="number" id="numeroAp" name="numeroAp" placeholder="Insira seu número de Ap" required>
        <br>
        <label>Telefone: </label>
        <input type="text" id="fone" name="fone" maxlength="15" placeholder="Insira seu telefone">

        <br>
        <label>E-mail: </label>
        <input type="email" id="email" name="email" placeholder="Insira seu e-mail">
        <br><br>
        <button type="submit" value="Cadastrar Morador">Cadastrar Morador</button>
    </form>
    
</body>
</html>

<script>
    let input = document.getElementById("fone")

    input.addEventListener((e)=>{
        let valor = input.value

        valor = valor.replace(/([-0-9]{2}) ( [0-9]{4} )( [0-9]{4} )/, "($1) $2-$3")


    })
</script>