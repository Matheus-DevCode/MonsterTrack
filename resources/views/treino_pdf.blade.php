<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Treino da Semana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
            margin: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 26px;
        }

        h2 {
            font-size: 18px;
            padding: 8px 12px;
            color: white;
            margin-top: 40px;
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #eaeaea;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Cores por dia */
        .segunda { background-color: #007bff; }
        .terca { background-color: #6c4f3d; }
        .quarta { background-color: #dc3545; }
        .quinta { background-color: #28a745; }
        .sexta { background-color: #ffc107; color: #212529; }
        .sabado { background-color: #fd7e14; }
    </style>
</head>
<body>

<h1>Treino da Semana</h1>

@foreach($treino as $dia => $exercicios)
    @php
        $classes = [
            'Segunda' => 'segunda',
            'Terça' => 'terca',
            'Quarta' => 'quarta',
            'Quinta' => 'quinta',
            'Sexta' => 'sexta',
            'Sábado' => 'sabado'
        ];

        $corClasse = collect($classes)->first(function($class, $prefix) use ($dia) {
            return str_contains($dia, $prefix);
        });
    @endphp

    <h2 class="{{ $corClasse }}">{{ $dia }}</h2>
    <table>
        <thead>
        <tr>
            <th>Grupo</th>
            <th>Exercício</th>
            <th>Séries</th>
            <th>Reps</th>
            <th>Técnica Avançada</th>
        </tr>
        </thead>
        <tbody>
        @foreach($exercicios as $ex)
            <tr>
                <td>{{ $ex['grupo'] ?? '-' }}</td>
                <td>{{ $ex['exercicio'] ?? '-' }}</td>
                <td>{{ $ex['series'] ?? '-' }}</td>
                <td>{{ $ex['reps'] ?? '-' }}</td>
                <td>{{ $ex['tecnica'] ?? '-' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endforeach

</body>
</html>
