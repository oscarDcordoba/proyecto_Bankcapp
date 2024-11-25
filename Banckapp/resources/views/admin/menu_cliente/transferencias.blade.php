@extends('layouts.admin')

@section('content')
<div id="transfer-screen" class="app-container">
    <h1>TRANSFERENCIAS</h1>
    <p id="saldo-disponible">Saldo disponible: $2,000,000</p>
    <form action="{{ route('transferencia') }}" method="get">
        @csrf
        <label for="tipo-cuenta">Seleccione tipo de cuenta</label>
        <select name="tipo_cuenta" id="tipo-cuenta" required>
            <option value="Ahorros">Ahorros</option>
            <option value="Corriente">Corriente</option>
        </select>

        <label for="numero-cuenta">Escriba el número de la cuenta</label>
        <input type="text" name="numero_cuenta" id="numero-cuenta" placeholder="Ingrese el número" required>

        <label for="monto">¿Cuánto dinero quiere transferir?</label>
        <input type="number" name="monto" id="monto" placeholder="Ingrese el valor" required min="1">

        <label for="motivo">Motivo (Opcional)</label>
        <input type="text" name="motivo" id="motivo" placeholder="Ingrese el motivo de la transacción">

        <button type="submit">Continuar</button>
        <a href="{{url('admin/menu_cliente/index')}}">
            <button type="button">Volver</button>
        </a>
    </form>
</div>
@endsection