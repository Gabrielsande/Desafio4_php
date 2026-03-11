<?php
$resultado = "";

if (isset($_POST['ex14']) && isset($_POST['itens'])) {

    ob_start();

    foreach ($_POST['itens'] as $i) {
        echo "$i <br>";
    }

    $resultado = ob_get_clean();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 14 - Lista de Compras</title>

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

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
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

        <h3>14. Lista de Compras</h3>

        <form method="POST">

            <label><input type="checkbox" name="itens[]" value="Arroz"> Arroz</label>

            <label><input type="checkbox" name="itens[]" value="Feijão"> Feijão</label>

            <label><input type="checkbox" name="itens[]" value="Leite"> Leite</label>

            <label><input type="checkbox" name="itens[]" value="Ovos"> Ovos</label>

            <button name="ex14">Mostrar</button>

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