<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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

    <h1>Edição de dados</h1>

    <form action="../../controller/edicaoController.php" method="post">
             
        <label>Apartamento: </label>
        <input type="number" id="numeroAp" name="numeroAp" minlength="1" maxlength="3"  placeholder="Insira seu número de Ap">
        <br>
        <label>Nome: </label>
        <input type="text" id="nome" name="nome" placeholder="Insira seu nome" maxlength="100" minlength="1" required>
        <br>
        <label>Telefone: </label>
        <input type="text" id="fone" name="fone" placeholder="Insira seu telefone" maxlength="15" >
        <br>
        <label>E-mail: </label>
        <input type="email" id="email" name="email" placeholder="Insira seu e-mail">
        <br><br>
        <button type="submit" value="Editar dados">Editar dados</button>
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