<?php
$resultado = "";

if (isset($_POST['ex7'])) {

    $dia = $_POST['dia'];

    $dias = [
        1 => "Domingo",
        2 => "Segunda",
        3 => "Terça",
        4 => "Quarta",
        5 => "Quinta",
        6 => "Sexta",
        7 => "Sábado"
    ];

    $resultado = $dias[$dia] ?? "Dia inválido";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 7 - Dia da Semana</title>

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
            width: 350px;
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

        <h3>7. Dia da Semana</h3>

        <form method="POST">

            <input type="number" name="dia" placeholder="Digite um número de 1 a 7">

            <button name="ex7">Mostrar</button>

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