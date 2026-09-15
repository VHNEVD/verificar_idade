<?php
$mensagem = "";

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e limpa os dados enviados pelo formulário
    $nome = trim(htmlspecialchars($_POST['nome'] ?? ''));
    $anoNascimento = filter_input(INPUT_POST, 'ano_nascimento', FILTER_VALIDATE_INT);

    if (!empty($nome) && $anoNascimento) {
        $anoAtual = (int)date("Y");
        $idade = $anoAtual - $anoNascimento;

        // Regra de verificação da idade
        if ($idade >= 18) {
            $mensagem = "<p>Acesso permitido, {$nome}!</p>";

            // Prepara a linha a ser gravada no log
            $dataHora = date("Y-m-d H:i:s");
            $linhaLog = "Data: {$dataHora} | Nome: {$nome} | Idade: {$idade} anos\n";

            // Salva no arquivo log_acessos.txt
            file_put_contents("log_acessos.txt", $linhaLog, FILE_APPEND | LOCK_EX);
        } else {
            $mensagem = "<p>Acesso negado, {$nome}!</p>";
        }
    } else {
        $mensagem = "<p>Por favor, preencha todos os campos corretamente.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Acesso</title>
</head>
<body>

    <h2>Formulário de Acesso</h2>

    <!-- Exibe a mensagem de resultado se houver -->
    <?php if (!empty($mensagem)) echo $mensagem; ?>

    <!-- Formulário apontando para a própria página -->
    <form action="" method="POST">
        <div>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
        <div>
            <label for="ano_nascimento">Ano de Nascimento:</label><br>
            <input type="number" id="ano_nascimento" name="ano_nascimento" min="1900" max="<?php echo date('Y'); ?>" required>
        </div>
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>