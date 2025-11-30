<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokémon Dex — Top 100</title>

    <style>
        body {
            background: linear-gradient(135deg, #ff7f00, #ff3c00);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px 0;
        }

        h2 {
            text-align: center;
            font-size: 40px;
            color: white;
            margin-bottom: 25px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.4);
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0,0,0,0.3);
        }

        thead {
            background: #ff7b00;
            color: white;
            font-size: 20px;
        }

        th, td {
            padding: 18px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 18px;
        }

        tr:hover {
            background: #ffe1bd;
        }

        img {
            width: 95px;
            height: 95px;
            transition: 0.2s;
        }

        img:hover {
            transform: scale(1.15);
        }
    </style>
</head>
<body>

    <h2>TOP 100 POKÉMON</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pokemones as $pk)
                <tr>
                    <td>{{ $pk['num'] }}</td>
                    <td><img src="{{ $pk['img'] }}" alt="pk"></td>
                    <td>{{ $pk['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
