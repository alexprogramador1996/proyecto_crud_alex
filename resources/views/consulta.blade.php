@extends("menu")
@section("content")
<div class="clientes-table">
    <h2>Listado de Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Saldo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->fecha}}</td>
                    <td>{{$cliente->saldo}}</td>
                    <td><a href="{{route('actualizar', $cliente->id)}}" class="btn-edit">Editar</a></td>
                    <td>
                        <form action="{{route('eliminar', $cliente->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn-delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="mensaje">
    {{Session::get('mensaje')}}
</div>

<style>
    .clientes-table {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    /* Estilos para botones de editar y eliminar */
    .btn-edit, .btn-delete {
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        color: #fff;
    }

    .btn-edit {
        background-color: #007bff;
    }

    .btn-delete {
        background-color: #dc3545;
    }

    .mensaje {
        margin-top: 20px;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border-radius: 5px;
        text-align: center;
    }
</style>
@endsection
