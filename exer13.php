<?php
$resultado = "";

if (isset($_POST['ex13'])) {

    $notas = $_POST['notas'];

    $s = 0;

    foreach ($notas as $n) {
        $s += $n;
    }

    $m = $s / count($notas);

    $resultado = "Média: $m";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 13 - Média de Notas</title>

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

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
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

        <h3>13. Média de 5 Notas</h3>

        <form method="POST">

            <input type="number" name="notas[]" placeholder="Nota 1" required>
            <input type="number" name="notas[]" placeholder="Nota 2" required>
            <input type="number" name="notas[]" placeholder="Nota 3" required>
            <input type="number" name="notas[]" placeholder="Nota 4" required>
            <input type="number" name="notas[]" placeholder="Nota 5" required>

            <button name="ex13">Calcular</button>

        </form>

        <?php
        if ($resultado != "") {
            echo "<div class='resultado'>$resultado</div>";
        }
        ?>

        <a class="voltar" href="index.php">⬅ Voltar</a>

    </div>

</body>

</html>