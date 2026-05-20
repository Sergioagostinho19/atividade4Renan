<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <!-- IMPORTANTE: deixa responsivo -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atividade PHP Responsiva</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #0f172a;
            color: #fff;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .card {
            background: #1e293b;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        h2 {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 8px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #22c55e;
            color: #000;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #16a34a;
        }

        ul {
            list-style: none;
        }

        ul li {
            padding: 8px;
            background: #334155;
            margin-bottom: 5px;
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background: #22c55e;
            color: #000;
        }

        td {
            background: #334155;
        }

        /* RESPONSIVIDADE */
        @media (max-width: 600px) {
            h2 {
                font-size: 18px;
            }

            th, td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- 1) FORMULÁRIO -->
    <div class="card">
        <h2>1) Digite informações</h2>

        <form method="post">
            <input type="text" name="campo1" placeholder="Digite algo 1">
            <input type="text" name="campo2" placeholder="Digite algo 2">
            <input type="text" name="campo3" placeholder="Digite algo 3">
            <input type="text" name="campo4" placeholder="Digite algo 4">
            <input type="text" name="campo5" placeholder="Digite algo 5">
            <button type="submit">Enviar</button>
        </form>
    </div>

    <!-- 2) LISTA -->
    <div class="card">
        <h2>2) Equipamentos de Informática</h2>
        <ul>
            <?php
                $equipamentos = [
                    "Mouse",
                    "Teclado",
                    "Monitor",
                    "Impressora",
                    "Scanner",
                    "Webcam",
                    "HD Externo",
                    "Roteador"
                ];

                foreach ($equipamentos as $item) {
                    echo "<li>$item</li>";
                }
            ?>
        </ul>
    </div>

    <!-- 3) TABELA -->
    <div class="card">
        <h2>3) Alunos e Notas</h2>

        <table>
            <tr>
                <th>Aluno</th>
                <th>Nota</th>
            </tr>

            <?php
                $alunos = [
                    "João" => 8.5,
                    "Maria" => 7.0,
                    "Carlos" => 9.2,
                    "Ana" => 6.8,
                    "Pedro" => 8.0,
                    "Lucas" => 7.5,
                    "Juliana" => 9.0
                ];

                foreach ($alunos as $nome => $nota) {
                    echo "<tr>
                            <td>$nome</td>
                            <td>$nota</td>
                          </tr>";
                }
            ?>
        </table>

    </div>

</div>

</body>
</html>