<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desempenho do Treino</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            font-size: 13px;
            color: #333;
            margin: 40px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 26px;
            margin: 0;
        }

        header span {
            font-size: 14px;
            color: #777;
        }

        .exercise-block {
            margin-bottom: 35px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 1px 2px 6px rgba(0,0,0,0.1);
            padding: 20px;
        }

        .exercise-title {
            background-color: #f1f5fb;
            color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 17px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #e6f0ff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .sugestao {
            background-color: #fffce0;
            padding: 12px;
            border-left: 4px solid #ffcc00;
            margin-top: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>

<header>
    <h1>Relatório de Desempenho</h1>
    <span>Treino realizado em: <strong>07/04/2025</strong></span>
</header>

@foreach($treino as $exercicio => $dados)
    <div class="exercise-block">
        <div class="exercise-title">🏋️ {{ $exercicio }}</div>

        <table>
            <thead>
            <tr>
                @foreach(array_keys($dados['series'][0]) as $coluna)
                    <th>{{ ucfirst($coluna) }}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($dados['series'] as $linha)
                <tr>
                    @foreach($linha as $valor)
                        <td>{{ $valor }}</td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>

        @if(isset($dados['sugestao']))
            <div class="sugestao">
                <strong>Sugestão para o próximo treino:</strong><br>
                {!! nl2br(e($dados['sugestao'])) !!}
            </div>
        @endif
    </div>
@endforeach

</body>
</html>
