<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Exemplos de PHP</h1>
    </header>

    <main>
        <section id="variables">
            <h2>Exibição de Variáveis</h2>
            <?php
            $nome = "João";
            $idade = 25;
            echo "<p>Nome: $nome</p>";
            echo "<p>Idade: $idade</p>";
            ?>
        </section>

        <section id="arrays">
            <h2>Manipulação de Arrays</h2>
            <?php
            $frutas = array("Maçã", "Banana", "Laranja");
            echo "<ul>";
            foreach ($frutas as $fruta) {
                echo "<li>$fruta</li>";
            }
            echo "</ul>";
            ?>
        </section>

        <section id="forms">
            <h2>Manipulação de Formulários</h2>
            <form method="post" action="">
                <input type="text" name="nome" placeholder="Digite seu nome" required>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = htmlspecialchars($_POST['nome']);
                echo "<p>Olá, $nome!</p>";
            }
            ?>
        </section>

        <section id="validation">
            <h2>Validação de Formulário</h2>
            <form method="post" action="">
                <input type="text" name="email" placeholder="Digite seu email" required>
                <input type="text" name="idade" placeholder="Digite sua idade" required>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = htmlspecialchars($_POST['email']);
                $idade = htmlspecialchars($_POST['idade']);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p>Email inválido.</p>";
                } elseif (!is_numeric($idade) || $idade < 0) {
                    echo "<p>Idade inválida. Digite um número positivo.</p>";
                } else {
                    echo "<p>Email: $email</p>";
                    echo "<p>Idade: $idade</p>";
                }
            }
            ?>
        </section>

        <section id="upload">
            <h2>Upload de Arquivos</h2>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="file" name="arquivo" required>
                <button type="submit">Enviar</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['arquivo'])) {
                $arquivo = $_FILES['arquivo'];
                $diretorio = 'uploads/';

                if (move_uploaded_file($arquivo['tmp_name'], $diretorio . $arquivo['name'])) {
                    echo "<p>Arquivo enviado com sucesso: " . $arquivo['name'] . "</p>";
                } else {
                    echo "<p>Falha ao enviar o arquivo.</p>";
                }
            }
            ?>
        </section>

        <section id="cookies">
            <h2>Uso de Cookies</h2>
            <form method="post" action="">
                <input type="text" name="cookieNome" placeholder="Digite seu nome" required>
                <button type="submit">Definir Cookie</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cookieNome = htmlspecialchars($_POST['cookieNome']);
                setcookie("nomeUsuario", $cookieNome, time() + (86400 * 30), "/");
                echo "<p>Cookie definido: $cookieNome</p>";
            }

            if (isset($_COOKIE['nomeUsuario'])) {
                echo "<p>Bem-vindo de volta, " . $_COOKIE['nomeUsuario'] . "!</p>";
            }
            ?>
        </section>

        <section id="dates">
            <h2>Manipulação de Datas</h2>
            <p>Data e hora atuais: <?php echo date('d/m/Y H:i:s'); ?></p>

            <?php
            $data = '2024-09-29';
            $dataFormatada = date('d/m/Y', strtotime($data));
            echo "<p>Data formatada: $dataFormatada</p>";
            ?>
        </section>

        <section id="error-handling">
            <h2>Tratamento de Erros</h2>
            <?php
            function divisao($numerador, $denominador) {
                if ($denominador == 0) {
                    throw new Exception("Divisão por zero não é permitida.");
                }
                return $numerador / $denominador;
            }

            try {
                echo divisao(10, 0);
            } catch (Exception $e) {
                echo "<p>Erro: " . $e->getMessage() . "</p>";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 - Exemplos de PHP</p>
    </footer>
</body>
</html>
