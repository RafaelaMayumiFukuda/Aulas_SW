<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <div id="quiz-container">
        <h1>Quiz de cultura Pop</h1>
        <form method="post" action="">
            <fieldset>
                <legend><?= htmlspecialchars($questao)?></legend>
                <?php foreach ($opcao as $listaOpcoes): ?>
                    <label>
                        <input type="radio" name="resposta" value="<?= htmlspecialchars($listaOpcoes)?>" required>
                        <?= htmlspecialchars($listaOpcoes) ?>
                    </label><br>
                    <?php endforeach; ?>
            </fieldset>
            <button type="submit">Enviar resposta</button>
        </form>
        <?php if ($mensagem): ?>
            <div class="feedback"><?= htmlspecialchars($mensagem)?></div>
        <?php endif; ?>
    </div>


    <?php
        $questao = "Qual é o nome do super-heroi que foi picado por uma aranha?":
        $opcao = ["Batman", "Superman", "Capitão America", "Homem-Aranha"]; 
        $corretaResposta = "Homem_Aranha";
        $respostaUsuario = "";
        $mensagem = "";

        if ($_SERVER["REQIEST_METHOD"] == "POST") {
            $respostaUsuario = $_POST['resposta'];

            if ($respostaUsuario == $corretaResposta) {
                $mensagem = "Correto! Você escolheu a resposta certa.";
            } else {
                $mensagem = "Incorreto. A resposta certa é: $corretaResposta." 
            }
        }
    ?>
</body>
</html>