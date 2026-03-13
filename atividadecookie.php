<?php


// Primeiro exercicio


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    $nome = htmlspecialchars($_POST['nome']); 
    
    $dois_dias = time() + (2 * 24 * 60 * 60);
    setcookie('nome_usuario', $nome, $dois_dias);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}



$nome_salvo = isset($_COOKIE['nome_usuario']) ? $_COOKIE['nome_usuario'] : null;



// segundo exercicio




if (isset($_COOKIE['contador_visitas'])) {
    $contador = $_COOKIE['contador_visitas'] + 1;
} else {
    $contador = 1;
}

setcookie('contador_visitas', $contador, 0);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 - Cookie no PHP</title>
</head>
<body>

    <h2>Exercício 1: Nome persistente (2 dias)</h2>
    
    <?php if ($nome_salvo): ?>
        <p>Bem-vindo de volta, <strong><?php echo $nome_salvo; ?></strong>!</p>
    <?php else: ?>
        <form method="POST">
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome" required>
            <button type="submit">Salvar nome</button>
        </form>
    <?php endif; ?>

    <hr>

    <h2>Exercício 2: Contador de Acessos</h2>
    <p>
        Você acessou ou recarregou essa página <strong><?php echo $contador; ?></strong> vezes
    </p>

</body>
</html>