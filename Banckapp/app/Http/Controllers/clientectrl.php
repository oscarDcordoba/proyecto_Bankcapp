<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cuenta_de_ahorro;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class clientectrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'cuentaAhorro' => 2000000,
            'tarjetaCredito' => 2000000,
            'prestamos' => 2000000,
        ];
        return view('admin.menu_cliente.index');
    }

    public function transferencias()
    {
        // Lógica para mostrar o manejar transferencias
        //return response()->json(['message' => 'Mostrando transferencias']);
        return view('admin.menu_cliente.transferencias');
    }

    public function showBalances()
    {
        // Lógica para mostrar el estado de cuenta
        //return response()->json(['message' => 'Mostrando estado de cuenta del cliente']);
        return view('admin.menu_cliente.balances');

        
    }

    public function retiros()
    {
        // Lógica para mostrar retiros
        //return response()->json(['message' => 'Mostrando retiros']);
        return view('admin.menu_cliente.retiros');
    }

    public function extracto()
    {
        // Lógica para mostrar extracto
        //return response()->json(['message' => 'Mostrando extracto']);
        return view('admin.menu_cliente.extracto');
    }

    public function settings()
    {
        // Lógica para configuración
        return response()->json(['message' => 'Mostrando configuración']);
    }
    
    public function show()
    {
        return view('transfer-screen');
    }

    public function process(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_cuenta' => 'required|string',
            'numero_cuenta' => 'required|string|max:20',
            'saldo' => 'required|numeric|min:1',
            'motivo' => 'nullable|string|max:255',
        ]);

        return redirect()->route('receipt')->with('data', $validatedData);
    }

    public function receipt()
    {
        $cuenta_de_ahorro = session('data');
        if (!$cuenta_de_ahorro) {
            return redirect()->route('main-screen');
        }

        return view('receipt-screen', ['data' => $cuenta_de_ahorro]);
    }
    
}
