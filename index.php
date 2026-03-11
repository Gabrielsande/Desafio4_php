<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Lista de Exercícios PHP</title>

        <style>
                /* RESET */

                * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }

                /* BODY */

                body {
                        background: linear-gradient(-45deg, #0f172a, #1e293b, #020617, #1e3a8a);
                        background-size: 400% 400%;
                        animation: bg 12s ease infinite;
                        min-height: 100vh;
                        padding: 50px;
                        color: white;
                }

                /* ANIMAÇÃO DO FUNDO */

                @keyframes bg {
                        0% {
                                background-position: 0% 50%;
                        }

                        50% {
                                background-position: 100% 50%;
                        }

                        100% {
                                background-position: 0% 50%;
                        }
                }

                /* HEADER */

                header {
                        text-align: center;
                        margin-bottom: 50px;
                }

                header h1 {
                        font-size: 46px;
                        font-weight: 700;
                        letter-spacing: 1px;
                        margin-bottom: 10px;
                }

                header p {
                        opacity: 0.8;
                        font-size: 16px;
                }

                /* TITULOS DAS SEÇÕES */

                .section-title {
                        margin-top: 50px;
                        margin-bottom: 20px;
                        font-size: 24px;
                        font-weight: 600;
                        padding-left: 15px;
                        border-left: 6px solid #38bdf8;
                }

                /* GRID */

                .container {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                        gap: 20px;
                }

                /* CARDS */

                .card {
                        background: rgba(255, 255, 255, 0.07);
                        backdrop-filter: blur(12px);
                        padding: 28px;
                        border-radius: 14px;
                        text-align: center;
                        text-decoration: none;
                        color: white;
                        font-weight: 600;
                        font-size: 17px;
                        transition: all 0.25s ease;
                        border: 1px solid rgba(255, 255, 255, 0.1);
                        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
                }

                /* HOVER */

                .card:hover {
                        transform: translateY(-8px) scale(1.04);
                        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.45);
                }

                /* CORES DAS CATEGORIAS */

                .seq:hover {
                        background: linear-gradient(135deg, #22c55e, #16a34a);
                }

                .if:hover {
                        background: linear-gradient(135deg, #3b82f6, #2563eb);
                }

                .loop:hover {
                        background: linear-gradient(135deg, #f59e0b, #d97706);
                }

                /* FOOTER */

                footer {
                        text-align: center;
                        margin-top: 70px;
                        opacity: 0.6;
                        font-size: 14px;
                        letter-spacing: 0.5px;
                }
        </style>

</head>

<body>

        <header>
                <h1>🐘 Lista de Exercícios PHP</h1>
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

        </div>

        <!-- Arrays -->
        <h2 class="section-title">Arrays</h2>

        <div class="container">
        <a href="exer13.php" class="card loop">Exercício 13</a>
        <a href="exer14.php" class="card loop">Exercício 14</a>
        <a href="exer15.php" class="card loop">Exercício 15</a>
        </div>


        <footer>
                Trabalho de PHP • Técnico em Informática
        </footer>

</body>

</html>