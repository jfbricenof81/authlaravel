<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    protected $clients = [
        ['id' => 0, 'name' => 'Emmett', 'last_name' => 'Brown', 'email' => 'emmett@domain.com'],
        ['id' => 1, 'name' => 'Jennifer', 'last_name' => 'Parker', 'email' => 'jennifer@domain.com'],
    ];

    public function control()
    {
        return view('index', ['clientes' => $this->clients]);
    }

    public function cedula($id)
    {
        // Aquí podrías buscar el cliente por id si lo necesitas
        $cliente = collect($this->clients)->firstWhere('id', $id);
        return view('details', ['cliente' => $cliente]);
    }
}