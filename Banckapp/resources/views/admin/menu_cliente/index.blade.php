@extends('layouts.admin')

@section('content')
<div class="row">
        <h1></h1>
</div>
    <hr>
    <div id="menu_cliente.index" class="app-container">
                <h2 id="welcome-message">Transacciones principales</h2>
                <p>Que deceas hacer?</p>
                <div class="button-grid">
                    <form action="{{ route('transferencia') }}" method="get">
                        @csrf
                        <button type="submit">TRANSFERENCIAS</button>
                    </form>
                    <form action="{{ route('balances') }}" method="get">
                        @csrf
                        <button type="submit">ESTADO DE CUENTA DEL CLIENTE</button>
                    </form>
                    <form action="{{ route('retiros') }}" method="get">
                        @csrf
                        <button type="submit">RETIROS</button>
                    </form>
                    <form action="{{ route('extracto') }}" method="get">
                        @csrf
                        <button type="submit">EXTRACTO</button>
                    </form>
                    <form action="{{ route('settings') }}" method="get">
                        @csrf
                        <button type="submit">CONFIGURACIÓN</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
