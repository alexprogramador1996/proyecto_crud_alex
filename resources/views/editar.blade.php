@extends("menu")
@section("content")
<div class="cliente-form">
    <h2>Editar Cliente</h2>
    <form action="{{route('update',$cliente)}}" method="post">
        @csrf
        Nombre: <input type="text" name="nombre" value="{{$cliente->nombre}}" class="input-field"><br>
        Fecha: <input type="date" name="fecha" value="{{$cliente->fecha}}" class="input-field"><br>
        Saldo: <input type="text" name="saldo" value="{{$cliente->saldo}}" class="input-field"><br>
        <input type="submit" name="bte" value="Guardar" class="btn-submit">
    </form>
</div>

<style>
    .cliente-form {
        max-width: 400px;
        margin: 0 auto;
        padding: 60px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    h2 {
        font-size: 24px;
        text-align: center;
        margin-bottom: 20px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: rgb(255, 51, 0);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
@endsection
