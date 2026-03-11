<?php

$ano = "";
$resultado = "";
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ano = $_POST['ano'] ?? "";

    if ($ano == "") {

        $erro = "Informe o ano de nascimento.";

    } else {

        $anoAtual = date("Y");
        $idade = $anoAtual - $ano;

        if ($idade >= 18 && $idade < 70) {
            $situacao = "Voto obrigatório";
        } elseif (($idade >= 16 && $idade < 18) || $idade >= 70) {
            $situacao = "Voto facultativo";
        } else {
            $situacao = "Não pode votar";
        }

        $resultado = "Idade: $idade anos <br> Situação: $situacao";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <title>Exercício 5 - Verificador de Voto</title>

    <style>
        /* RESET */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* BODY */

        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* CARD */

        .card {
            background: #ffffff;
            color: #111;
            width: 380px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        /* TITULO */

        .card h3 {
            margin-bottom: 20px;
        }

        /* INPUT */

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        /* BUTTON */

        button {
            width: 100%;
            padding: 12px;
            background: #22c55e;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #16a34a;
        }

        /* RESULTADO */

        .resultado {
            margin-top: 20px;
            padding: 12px;
            background: #ecfdf5;
            border: 1px solid #22c55e;
            border-radius: 6px;
            font-weight: bold;
        }

        /* ERRO */

        .erro {
            margin-top: 20px;
            padding: 12px;
            background: #ffe8e8;
            border: 1px solid red;
            border-radius: 6px;
            font-weight: bold;
            color: red;
        }

        /* BOTÃO VOLTAR */

        .voltar {
            margin-top: 20px;
            display: block;
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }

        .voltar:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>

    <div class="card">

        <h3>5. Verificador de Voto</h3>

        <form method="POST">

            <input type="number" name="ano" placeholder="Ano de nascimento" value="<?= htmlspecialchars($ano) ?>"
                required>

            <button type="submit">Verificar</button>

        </form>

        <?php

        if ($erro != "") {
            echo "<div class='erro'>$erro</div>";
        }

        if ($resultado != "") {
            echo "<div class='resultado'>$resultado</div>";
        }

        ?>

        <a class="voltar" href="index.php">⬅ Voltar ao menu</a>

    </div>

</body>

</html>