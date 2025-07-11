<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getInventarios(Request $request)
    {
        $query = [];

        if ($request->filled('producto_id')) {
            $query['producto_id'] = $request->producto_id;
        }

        if ($request->filled('botiquin_id')) {
            $query['botiquin_id'] = $request->botiquin_id;
        }

        // Llamada a la API
        $response = Http::get('https://ado.companytechnova.tech/apis/inventario.php', $query);
        $inventarios = $response->json();

        $productosResponse = Http::get('https://ado.companytechnova.tech/apis/productos.php');
        $botiquinesResponse = Http::get('https://ado.companytechnova.tech/apis/botiquines.php');

        $productos = $productosResponse->successful() ? $productosResponse->json() : [];
        $botiquines = $botiquinesResponse->successful() ? $botiquinesResponse->json() : [];


        return view('api.inventarios.index', compact('inventarios', 'productos', 'botiquines'));
    }

    public function getPacientes()
    {
        $response = Http::get('https://ado.companytechnova.tech/apis/pacientes.php');
        $pacientes = $response->json();

        return view('api.pacientes.index', compact('pacientes'));
    }

    public function getCaducidades(Request $request)
    {
        $dias = $request->get('dias', 30);
        $response = Http::get('https://ado.companytechnova.tech/apis/productos_proximos_caducar.php', ['dias' => $dias]);

        $caducidades = $response->json();

        return view('api.productos.index', compact('caducidades'));
    }
}