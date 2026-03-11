<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Lista de Exercícios PHP</title>

        <style>
                * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                body {
                        background: linear-gradient(135deg, #0f172a, #1e293b, #020617);
                        min-height: 100vh;
                        padding: 40px;
                        color: white;
                }

                header {
                        text-align: center;
                        margin-bottom: 40px;
                }

                header h1 {
                        font-size: 42px;
                        margin-bottom: 10px;
                }

                header p {
                        opacity: 0.8;
                        font-size: 16px;
                }

                /* TITULOS DAS SEÇÕES */

                .section-title {
                        margin-top: 40px;
                        margin-bottom: 20px;
                        font-size: 22px;
                        border-left: 5px solid #38bdf8;
                        padding-left: 10px;
                }

                /* GRID */

                .container {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                        gap: 20px;
                }

                /* CARDS */

                .card {
                        background: rgba(255, 255, 255, 0.08);
                        backdrop-filter: blur(10px);
                        padding: 25px;
                        border-radius: 12px;
                        text-align: center;
                        text-decoration: none;
                        color: white;
                        font-weight: bold;
                        transition: 0.3s;
                        border: 1px solid rgba(255, 255, 255, 0.1);
                }

                .card:hover {
                        transform: translateY(-6px) scale(1.03);
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
                }

                /* CORES DAS CATEGORIAS */

                .seq:hover {
                        background: #22c55e;
                }

                .if:hover {
                        background: #3b82f6;
                }

                .loop:hover {
                        background: #f59e0b;
                }

                /* FOOTER */

                footer {
                        text-align: center;
                        margin-top: 60px;
                        opacity: 0.6;
                        font-size: 14px;
                }
        </style>

</head>

<body>

        <header>
                <h1> 🐘 Lista de Exercícios PHP</h1>
                <p>Estruturas Sequenciais • Decisão • Laços de Repetição</p>
        </header>

        <!-- SEQUENCIAIS -->

        <h2 class="section-title">Algoritmos Sequenciais</h2>

        <div class="container">

                <a href="exer1.php" class="card seq">Exercício 1</a>
                <a href="exer2.php" class="card seq">Exercício 2</a>
                <a href="exer3.php" class="card seq">Exercício 3</a>

        </div>

        <!-- IF / SWITCH -->

        <h2 class="section-title">Estruturas de Decisão (IF / SWITCH)</h2>

        <div class="container">

                <a href="exer4.php" class="card if">Exercício 4</a>
                <a href="exer5.php" class="card if">Exercício 5</a>
                <a href="exer6.php" class="card if">Exercício 6</a>

                <a href="exer7.php" class="card if">Exercício 7</a>
                <a href="exer8.php" class="card if">Exercício 8</a>
                <a href="exer9.php" class="card if">Exercício 9</a>

        </div>

        <!-- LAÇOS -->

        <h2 class="section-title">Laços de Repetição</h2>

        <div class="container">

                <a href="exer10.php" class="card loop">Exercício 10</a>
                <a href="exer11.php" class="card loop">Exercício 11</a>
                <a href="exer12.php" class="card loop">Exercício 12</a>

                <a href="exer13.php" class="card loop">Exercício 13</a>
                <a href="exer14.php" class="card loop">Exercício 14</a>
                <a href="exer15.php" class="card loop">Exercício 15</a>

        </div>

        <footer>
                Trabalho de PHP • Técnico em Informática
        </footer>

</body>

</html>