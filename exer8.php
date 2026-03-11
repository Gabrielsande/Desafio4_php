<?php
$resultado = "";

if (isset($_POST['ex8'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['op'];

    ob_start(); // guarda o echo

    switch ($op) {
        case "somar":
            echo $a + $b;
            break;

        case "sub":
            echo $a - $b;
            break;

        case "mult":
            echo $a * $b;
            break;

        case "div":
            echo $b != 0 ? $a / $b : "Erro divisão";
            break;
    }

    $resultado = ob_get_clean();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 8 - Calculadora</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: white;
            padding: 30px;
            width: 360px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h3 {
            margin-bottom: 20px;
            color: #111;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #22c55e;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background: #16a34a;
        }

        .resultado {
            margin-top: 20px;
            padding: 12px;
            background: #ecfdf5;
            border: 1px solid #22c55e;
            border-radius: 6px;
            font-weight: bold;
        }

        .voltar {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #2563eb;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div class="card">

        <h3>8. Calculadora</h3>

        <form method="POST">

            <input type="number" name="a" placeholder="Primeiro número" required>

            <input type="number" name="b" placeholder="Segundo número" required>

            <select name="op">

                <option value="somar">Somar</option>
                <option value="sub">Subtrair</option>
                <option value="mult">Multiplicar</option>
                <option value="div">Dividir</option>

            </select>

            <button name="ex8">Calcular</button>

        </form>

        <?php
        if ($resultado != "") {
            echo "<div class='resultado'>Resultado: $resultado</div>";
        }
        ?>

        <a class="voltar" href="index.php">⬅ Voltar</a>

    </div>

</body>

</html>