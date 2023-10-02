@extends("menu")
@section("content")
<div class="form-container">
    <h2>Guardar Información</h2>
    <form action="guardar" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="saldo">Saldo:</label>
            <input type="text" id="saldo" name="saldo" required>
        </div>
        <div class="form-group">
            <input type="submit" name="bte" value="Guardar" class="btn-submit">
        </div>
    </form>
    @if (isset($mensaje))
        <div class="mensaje">
            {{$mensaje}}
        </div>
    @endif
</div>

<style>
    .form-container {
        max-width: 450px;
        margin: 0 auto;
        padding: 60px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-submit {
        background-color: hsl(356, 100%, 50%);
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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
