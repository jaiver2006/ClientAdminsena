<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Computadores</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif
        }

        body {
            background: #edf6f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh
        }

        .container {
            width: 80%;
            max-width: 900px;
            background: #fff;
            padding: 30px;
            border: 1px solid #d7e8dc;
            border-radius: 12px;
            box-shadow: 0 18px 36px rgba(18, 53, 42, .10)
        }

        h1 {
            color: #007a3d;
            margin-bottom: 25px
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px
        }

        thead {
            background: linear-gradient(135deg, #12352a, #007a3d);
            color: #fff
        }

        thead th,
        tbody td {
            padding: 15px;
            text-align: left
        }

        tbody td {
            border-bottom: 1px solid #d7e8dc
        }

        tbody tr:nth-child(even) {
            background: #f4faf6
        }

        tbody tr:hover {
            background: #e7f4eb;
            transition: .3s
        }

        .numero {
            width: 70px;
            text-align: center;
            font-weight: bold
        }

        .acciones {
            display: flex;
            gap: 10px;
            align-items: center
        }

        .acciones a,
        .acciones button {
            min-width: 92px;
            min-height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 10px;
            font-size: .88rem;
            font-weight: 800;
            box-shadow: 0 5px 12px rgba(18, 53, 42, .12);
            transition: transform .2s ease, box-shadow .2s ease, filter .2s ease
        }

        .acciones a {
            color: #fff;
            text-decoration: none
        }

        .acciones a:hover,
        .acciones button:hover {
            transform: translateY(-2px);
            filter: brightness(1.04);
            box-shadow: 0 8px 16px rgba(18, 53, 42, .18)
        }

        .mostrar {
            background: #007a3d
        }

        .editar {
            background: #f2c94c;
            color: #12352a !important
        }

        .acciones button {
            background: linear-gradient(135deg, #c62828, #e53935);
            color: #fff;
            cursor: pointer
        }

        form {
            display: inline
        }

        .total {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
            color: #1d5c3c
        }

        .list-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 24px
        }

        .list-heading h1 {
            margin: 0;
            text-align: left
        }

        .list-actions {
            display: flex;
            align-items: center;
            gap: 10px
        }

        .home-button,
        .create-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 17px;
            border-radius: 11px;
            color: #fff;
            font-size: .9rem;
            font-weight: 800;
            text-decoration: none;
            box-shadow: 0 8px 16px rgba(0, 122, 61, .2);
            transition: transform .2s ease, box-shadow .2s ease
        }

        .home-button {
            background: #145538
        }

        .create-button {
            background: linear-gradient(135deg, #007a3d, #39a900)
        }

        .home-button:hover,
        .create-button:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 22px rgba(0, 122, 61, .28)
        }

        @media (max-width: 640px) {
            .container {
                width: 96%;
                padding: 20px
            }

            .list-heading {
                align-items: flex-start;
                flex-direction: column
            }

            .list-heading h1 {
                font-size: 1.6rem
            }

            .list-actions {
                flex-wrap: wrap
            }

            table {
                min-width: 700px
            }

            .container {
                overflow-x: auto
            }
        }
    </style>
    @include('includes.listado-styles')
</head>

<body>
    <div class="container">
        <div class="list-heading">
            <h1>Listado de Computadores</h1>
            <div class="list-actions">
                <a class="home-button" href="{{ route('dashboard') }}"><i class="fas fa-house"></i> Inicio</a>
                <a class="create-button" href="{{ route('computer.create') }}"><i class="fas fa-plus"></i> Crear
                    computador</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="numero">#</th>
                    <th>Número</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($computers as $computer)
                    <tr>
                        <td class="numero">{{ $loop->iteration }}</td>
                        <td>{{ $computer['number'] }}</td>
                        <td>{{ $computer['brand'] }}</td>
                        <td>
                            @if (!empty($computer['imagen_url']))
                                <img src="{{ $computer['imagen_url'] }}" alt="{{ $computer['brand'] }}" width="100">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td class="acciones">
                            <a href="{{ route('computer.show', $computer['id']) }}" class="mostrar">Mostrar</a>
                            <a href="{{ route('computer.edit', $computer['id']) }}" class="editar">Editar</a>
                            <form action="{{ route('computer.destroy', $computer['id']) }}" method="POST"
                                onsubmit="return confirm('¿Estás seguro de eliminar este computador?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center;padding:20px">No hay computadores registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="total">Total de computadores: {{ count($computers) }}</div>
    </div>
</body>

</html>
